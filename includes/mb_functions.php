<?php
/**
    Multibyte analogue of preg_match_all() function
    @author chuckie
    @link http://www.php.net/manual/en/function.preg-match-all.php#71572
**/
function mb_preg_match_all($pattern, $subject, &$matches, $flags = PREG_PATTERN_ORDER, $offset = 0, $encoding = null)
{
    if(is_null($encoding))
    {
        $encoding = mb_internal_encoding();
    }

    $offset = strlen(mb_substr($subject, 0, $offset, $encoding));
    $ret = preg_match_all($pattern, $subject, $matches, $flags, $offset);

    if($ret && ($flags & PREG_OFFSET_CAPTURE))
    foreach($matches as &$ha_match)
        foreach($ha_match as &$ha_match)
            $ha_match[1] = mb_strlen(mb_substr($subject, 0, $ha_match[1]), $encoding);
    return $ret;
}

/**
    Multibyte analogue of preg_match() function
    @author chuckie
    @link http://php.nusa.net.id/manual/en/function.preg-match.php#71571
**/
function mb_preg_match($pattern, $subject, &$matches, $flags = null, $offset = 0, $encoding = null)
{
    if(is_null($encoding))
    {
        $encoding = mb_internal_encoding();
    }

    $offset = strlen(mb_substr($subject, 0, $offset, $encoding));
    $result = preg_match($pattern, $subject, $matches, $flags, $offset);

    if($result && ($flags & PREG_OFFSET_CAPTURE))
    {
        foreach($matches as &$ha_subpattern)
        {
            $ha_subpattern[1] = mb_strlen(substr($subject, 0, $ha_subpattern[1]), $encoding);
        }
    }
    return $result;
}

/**
    Multibyte analogue of str_split() function (with htmlentities addition)
**/
function mb_str_split_ent($str, $length = 1, $encoding = null)
{
    if($length < 1)
    {
        return false;
    }

    if(is_null($encoding))
    {
        $encoding = mb_internal_encoding();
    }

    $result = array();
    $space_key = null;
    for($i = 0, $c = mb_strlen($str, $encoding); $i < $c; $i += $length)
    {
        $result[] = htmlentities(mb_substr($str, $i, $length, $encoding), ENT_QUOTES, $encoding);
    }

    return $result;
}