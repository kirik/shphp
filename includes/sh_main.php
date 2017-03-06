<?php
/**
 *  SHPHP - Syntax Highlighter in PHP
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
 *  Version:    0.1.2
**/

Class SHPHP {
    // the result array
    private static $str_stack;
    // pattern stack - each element is a language pattern
    private static $patt_stack;
    // the current position in input array
    private static $pos;
    // current style - name of current style, or null if there is no current style
    private static $curr_style;
    private static $language;
    // Vars to automatic load LDF (language definition files)
    public static $languages;
    public static $langs_dir = null;

    /**
        Highlights all elements containing code in a text string.
        @param  $input a text string
        @param  $language a language definition array
        @return highlighted string
    **/
    public static function highlight($input, $language)
    {
        if(empty($input))
        {
            return null;
        }

        if(is_array($language))
        {
            self::$language = $language;
        }
        else
        {
            // Set default LDF dir
            if(self::$langs_dir === null)
            {
                self::$langs_dir = dirname(__FILE__) . '/langs';
            }

            if(isset(self::$languages[$language]))
            {
                self::$language = self::$languages[$language];
            }
            elseif(file_exists($include = self::$langs_dir . '/sh_' . $language . '.php')) // Autoload LDF (if possible)
            {
                include($include);
                self::$language = $sh_languages[$language];
            }
        }

        self::$pos = 0;
        self::$curr_style = null;
        self::$patt_stack = array();
        self::$str_stack = mb_str_split_ent($input);

        for($l = 0, $lines = explode("\n", $input), $cl = count($lines); $l < $cl; $l++)
        {
            $line = $lines[$l];
            $start = self::$pos;
            $match_cache = array();

            // last line check
            if(isset($lines[$l + 1]))
            {
                $end = self::$pos + mb_strlen($line);
                $nex_ln_start = $end + 1;
            }
            else
            {
                $nex_ln_start = $end = mb_strlen($input);
            }

            while(1)
            {
                $pos_in_line = self::$pos - $start;
                $state_idx = (($stack_len = count(self::$patt_stack)) === 0) ? 0 : self::$patt_stack[$stack_len - 1][2] /* get the next state */;
                $state = self::$language[$state_idx];
                $best_match = array(array(null, null));
                $best_patt_idx = -1;

                if(empty($match_cache[$state_idx]))
                {
                    $mc = $match_cache[$state_idx] = array();
                }
                else
                {
                    $mc = $match_cache[$state_idx];
                }

                for($i = 0, $c = count($state); $i < $c; $i++)
                {
                    $match = array(array(null, null));

                    if($i < count($mc) && (empty($mc[$i][0][0]) || $pos_in_line <= $mc[$i][0][1]))
                    {
                        $match = $mc[$i];
                    }
                    else
                    {
                        mb_preg_match($state[$i][0], $line, $match, PREG_OFFSET_CAPTURE, $pos_in_line);
                        $mc[$i] = $match;
                    }

                    if(isset($match[0][0]) && (!isset($best_match[0][0]) || $match[0][1] < $best_match[0][1]))
                    {
                        $best_match = $match;
                        $best_patt_idx = $i;
                        if($match[0][1] === $pos_in_line)
                        {
                            break;
                        }
                    }
                }

                if(!isset($best_match[0][0]))
                {
                    self::output(mb_substr($line, $pos_in_line), null);
                    break;
                }
                else
                {
                    // got a match
                    if($best_match[0][1] > $pos_in_line)
                    {
                        self::output(mb_substr($line, $pos_in_line, $best_match[0][1] - $pos_in_line), null);
                    }

                    $pattern = $state[$best_patt_idx];
                    $new_style = $pattern[1];
                    $matched_string = null;

                    if(is_array($new_style))
                    {
                        for($subexp = 0, $c = count($new_style); $subexp < $c; $subexp++)
                        {
                            // Check heredoc
                            if($new_style[$subexp] == 'heredoc')
                            {
                                // Set the exit heredoc pattern
                                self::$language[$state[$best_patt_idx][2]][0][0] = '/^'.$best_match[$subexp + 1][0].';/';
                                // Change style
                                $new_style[$subexp] = $new_style[$subexp - 1];
                            }
                            $matched_string = $best_match[$subexp + 1][0];
                            self::output($matched_string, $new_style[$subexp]);
                        }
                    }
                    else
                    {
                        $matched_string = $best_match[0][0];
                        self::output($matched_string, $new_style);
                    }

                    switch($pattern[2])
                    {
                        case -1:
                            // do nothing
                        break;
                        case -2:
                            // exit
                            array_pop(self::$patt_stack);
                        break;
                        case -3:
                            // exitall
                            self::$patt_stack = array();
                        break;
                        default:
                            // this was the start of a delimited pattern or a state/environment
                            array_push(self::$patt_stack, $pattern);
                        break;
                    }
                }
            }

            self::$pos = $nex_ln_start;
        }

        // end of input string
        $i = self::$pos;
        while(1)
        {
            if(trim(self::$str_stack[--$i]) != '')
            {
                self::$str_stack[$i] .= '</span>';
                break;
            }
        }

        return implode('', self::$str_stack);
    }

    private static function output($s, $style = null)
    {
        $length = mb_strlen($s);

        // we don't want to output empty <span></span> elements
        if($length === 0)
        {
            return;
        }
        // also we don't want to place spaces and tabs in <span></span> elements
        elseif(trim($s) == '')
        {
            self::$pos += $length;
            return;
        }

        if(empty($style))
        {
            if(($stack_len = count(self::$patt_stack)) !== 0)
            {
                // check whether this is a state or an environment
                if(!isset(self::$patt_stack[$stack_len - 1][3]))
                {
                    // it's not a state - it's an environment; use the style for this environment
                    $style = self::$patt_stack[$stack_len - 1][1];
                }
            }
        }

        if(self::$curr_style !== $style)
        {
            if(!empty(self::$curr_style))
            {
                // we don't want to insert </span> element after spaces/tabs
                $i = self::$pos;
                while(1)
                {
                    if(trim(self::$str_stack[--$i]) != '')
                    {
                        self::$str_stack[$i] .= '</span>';
                        break;
                    }
                }
            }

            if(!empty($style))
            {
                // we don't want to insert <span> element before spaces/tabs
                $i = self::$pos;
                while(1)
                {
                    if(trim(self::$str_stack[$i]) != '')
                    {
                        self::$str_stack[$i] = '<span class="'.$style.'">'.self::$str_stack[$i];
                        break;
                    }
                    $i++;
                }
            }
        }

        self::$pos += $length;
        self::$curr_style = $style;
    }
}