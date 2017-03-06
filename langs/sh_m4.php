<?php
$sh_languages['m4'] = array(
    // State #0
    array(
        array(
            '/dnl/i',
            'sh_keyword',
            1,
            1
        ),
        array(
            '/#/i',
            'sh_comment',
            7
        ),
        array(
            '/"/i',
            'sh_string',
            8
        ),
        array(
            '/\$[\d]+/i',
            'sh_variable',
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
            '/[ \t]+/i',
            'sh_comment',
            -1
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
            '/.+/i',
            'sh_comment',
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
            '/$/i',
            null,
            -2
        ),
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
    )
);