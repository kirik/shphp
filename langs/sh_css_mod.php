<?php
/**
 *  SHPHP - Syntax Highlighter in PHP
 *  Language definition file for CSS (modified)
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
 *  Version:    0.1.1
**/

$sh_languages['css_mod'] = array(
    // State #0
    array(
        array(
            '/\/\*/',
            'sh_comment',
            9
        ),
        array(
            '/(@(?:import|font-face|charset))([^;]+)(;)/i',
            array('sh_selector', 'sh_string', 'sh_selector'),
            -1
        ),
        array(
            '/(@media[^\{]+)(\{)/i',
            array('sh_selector', 'sh_cbracket'),
            10
        ),
        array(
            '/#[a-z0-9_]+/i',
            'sh_selector',
            -1
        ),
        array(
            '/\.[a-z0-9_]+/i',
            'sh_class',
            -1
        ),
        array(
            '/:(?:link|hover|visited|active)/i',
            'sh_variable',
            -1
        ),
        array(
            '/\{/',
            'sh_cbracket',
            10,
            1
        ),
        array(
            '/~|!|%|\^|\*|\(|\)|-|\+|=|\[|\]|\\\\|:|;|,|\.|\/|\?|&|<|>|\|/',
            'sh_symbol',
            -1
        )
    ),
    // State #1
    array(
        // Moose was here
    ),
    // State #2
    array(
        array(
            '/"/',
            'sh_string',
            -2
        ),
        array(
            '/\\\\(?:\\\\|")/',
            'sh_escape',
            -1
        )
    ),
    // State #3
    array(
        array(
            "/'/",
            'sh_string',
            -2
        ),
        array(
            "/\\\\(?:\\\\|')/",
            'sh_escape',
            -1
        )
    ),
    // State #4
    array(
        // Moose was here
    ),
    // State #5
    array(
        // moose was here
    ),
    // State #6
    array(
        // Moose was here
    ),
    // State #7
    array(
        // Moose was here
    ),
    // State #8
    array(
        // Moose was here
    ),
    // State #9
    array(
        array(
            '/\*\//',
            'sh_comment',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/\S+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/(?:TODO|FIXME|BUG)(?:[:]?)/i',
            'sh_todo',
            -1
        )
    ),
    // State #10
    array(
        array(
            '/\}/',
            'sh_cbracket',
            -2
        ),
        array(
            '/\/\*/',
            'sh_comment',
            9
        ),
        array(
            '/"/',
            'sh_string',
            2
        ),
        array(
            "/'/",
            'sh_string',
            3
        ),
        array(
            '/(?:[a-z0-9-_]+)\s*:/i',
            'sh_property',
            11
        )
    ),
    // State #11
    array(
        array(
            '/\}/',
            'sh_symbol',
            0
        ),
        array(
            '/;/',
            'sh_symbol',
            -2
        ),
        array(
            '/#(?:[a-z0-9_]+)/i',
            'sh_value',
            -1
        ),
        array(
            '/[-+]?[0-9.]+(em|ex|px|in|cm|mm|pt|pc|deg|rad|grad|ms|s|Hz|kHz|%)/i',
            'sh_value',
            -1
        ),
        array(
            '/\.?[0-9.]/i',
            'sh_value',
            -1
        ),
        array(
            '/(?:inherit|none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|xx-small|x-small|small|medium|large|x-large|' .
            'xx-large|smaller|larger|italic|oblique|small-caps|normal|bold|bolder|lighter|light|100|200|300|400|500|600|700|800|900|' .
            'transparent|repeat|repeat-x|repeat-y|no-repeat|baseline|sub|super|top|text-top|middle|bottom|text-bottom|left|right|center|' .
            'justify|konq-center|disc|circle|square|box|decimal|decimal-leading-zero|lower-roman|upper-roman|lower-greek|lower-alpha|' .
            'lower-latin|upper-alpha|upper-latin|hebrew|armenian|georgian|cjk-ideographic|hiragana|katakana|hiragana-iroha|katakana-iroha|' .
            'inline|inline-block|block|list-item|run-in|compact|marker|table|inline-table|table-row-group|table-header-group|' .
            'table-footer-group|table-row|table-column-group|table-column|table-cell|table-caption|auto|crosshair|default|pointer|move|' .
            'e-resize|ne-resize|nw-resize|n-resize|se-resize|sw-resize|s-resize|w-resize|text|wait|help|above|absolute|always|avoid|' .
            'below|bidi-override|blink|both|capitalize|caption|clip|close-quote|collapse|condensed|crop|cross|ellipsis|ellipsis-word|' .
            'embed|expanded|extra-condensed|extra-expanded|fixed|hand|hide|higher|icon|inside|invert|landscape|level|line-through|loud|' .
            'lower|lowercase|ltr|menu|message-box|mix|narrower|no-close-quote|no-open-quote|nowrap|open-quote|outside|overline|portrait|' .
            'pre|pre-line|pre-wrap|relative|rtl|scroll|semi-condensed|semi-expanded|separate|show|small-caption|static|static-position|' .
            'status-bar|thick|thin|ultra-condensed|ultra-expanded|underline|uppercase|visible|wider|break|serif|sans-serif|cursive|fantasy|' .
            'monospace|border-box|content-box|-moz-box)/i',
            'sh_value',
            -1
        ),
        array(
            '/(?:[a-z0-9\(\)\-_=])/i',
            'sh_symbol',
            -1
        )
    )
);
