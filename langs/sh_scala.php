<?php
$sh_languages['scala'] = array(
    // State #0
    array(
        array(
            '/\b(?:import|package)\b/i',
            'sh_preproc',
            -1
        ),
        array(
            '/\/\/\//i',
            'sh_comment',
            1
        ),
        array(
            '/\/\//i',
            'sh_comment',
            7
        ),
        array(
            '/\/\*\*/i',
            'sh_comment',
            8
        ),
        array(
            '/\/\*/i',
            'sh_comment',
            9
        ),
        array(
            '/\b[+-]?(?:(?:0x[a-f0-9]+)|(?:(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?))u?(?:(?:int(?:8|16|32|64))|L)?\b/i',
            'sh_number',
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            10
        ),
        array(
            '/\'/i',
            'sh_string',
            11
        ),
        array(
            '/(\b(?:class|trait))([ \t]+)([$a-z0-9_]+)/i',
            array('sh_keyword', 'sh_normal', 'sh_classname'),
            -1
        ),
        array(
            '/abstract|case|catch|class|def|do|else|extends|false|final|finally|for|forSome|if|implicit|import|lazy|match|new|null|object|override|package|private|protected|requires|return|sealed|super|this|throw|trait|try|true|type|val|var|while|with|yield|_|:|=>|=|<-|<:|<%|>:|#|@/i',
            'sh_keyword',
            -1
        ),
        array(
            '/\b(?:Int|Byte|Boolean|Char|Long|Float|Double|Short|Nil)\b/i',
            'sh_type',
            -1
        ),
        array(
            '/~|!|%|\^|\*|\(|\)|-|\+|=|\[|\]|\\\\|:|;|,|\.|\/|\?|&|<|>|\|/i',
            'sh_symbol',
            -1
        ),
        array(
            '/\{|\}/i',
            'sh_cbracket',
            -1
        ),
        array(
            '/(?:[a-z]|_|[`~!@#$%&*()_=+{}|;:",<.>\/?\'\\\\[\]\^\-])(?:[a-z0-9_]|[`~!@#$%&*()_=+{}|;:",<.>\/?\'\\\\[\]\^\-])*(?=[ \t]*\()/i',
            'sh_function',
            -1
        )
    ),
    // State #1
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/<\?xml/i',
            'sh_preproc',
            2,
            1
        ),
        array(
            '/<!DOCTYPE/i',
            'sh_preproc',
            4,
            1
        ),
        array(
            '/<!--/i',
            'sh_comment',
            5
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            6,
            1
        ),
        array(
            '/&(?:[a-z0-9]+);/i',
            'sh_preproc',
            -1
        ),
        array(
            '/<(?:\/)?[a-z][a-z0-9]*(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z][a-z0-9]*/i',
            'sh_keyword',
            6,
            1
        ),
        array(
            '/@[a-z]+/i',
            'sh_type',
            -1
        ),
        array(
            '/(?:TODO|FIXME|BUG)(?:[:]?)/i',
            'sh_todo',
            -1
        )
    ),
    // State #2
    array(
        array(
            '/\?>/i',
            'sh_preproc',
            -2
        ),
        array(
            '/([^=" \t>]+)([ \t]*)(=?)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            3
        )
    ),
    // State #3
    array(
        array(
            '/\\\\(?:\\\\|")/i',
            null,
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            -2
        )
    ),
    // State #4
    array(
        array(
            '/>/i',
            'sh_preproc',
            -2
        ),
        array(
            '/([^=" \t>]+)([ \t]*)(=?)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            3
        )
    ),
    // State #5
    array(
        array(
            '/-->/i',
            'sh_comment',
            -2
        ),
        array(
            '/<!--/i',
            'sh_comment',
            5
        )
    ),
    // State #6
    array(
        array(
            '/(?:\/)?>/i',
            'sh_keyword',
            -2
        ),
        array(
            '/([^=" \t>]+)([ \t]*)(=?)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            3
        )
    ),
    // State #7
    array(
        array(
            '/$/i',
            null,
            -2
        )
    ),
    // State #8
    array(
        array(
            '/\*\//i',
            'sh_comment',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/<\?xml/i',
            'sh_preproc',
            2,
            1
        ),
        array(
            '/<!DOCTYPE/i',
            'sh_preproc',
            4,
            1
        ),
        array(
            '/<!--/i',
            'sh_comment',
            5
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            6,
            1
        ),
        array(
            '/&(?:[a-z0-9]+);/i',
            'sh_preproc',
            -1
        ),
        array(
            '/<(?:\/)?[a-z][a-z0-9]*(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z][a-z0-9]*/i',
            'sh_keyword',
            6,
            1
        ),
        array(
            '/@[a-z]+/i',
            'sh_type',
            -1
        ),
        array(
            '/(?:TODO|FIXME|BUG)(?:[:]?)/i',
            'sh_todo',
            -1
        )
    ),
    // State #9
    array(
        array(
            '/\*\//i',
            'sh_comment',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
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
            '/"/i',
            'sh_string',
            -2
        ),
        array(
            '/\\\\./i',
            'sh_specialchar',
            -1
        )
    ),
    // State #11
    array(
        array(
            '/\'/i',
            'sh_string',
            -2
        ),
        array(
            '/\\\\./i',
            'sh_specialchar',
            -1
        )
    )
);
