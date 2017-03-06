<?php
$sh_languages['html'] = array(
    // State #0
    array(
        array(
            '/<\?xml/i',
            'sh_preproc',
            1,
            1
        ),
        array(
            '/<!DOCTYPE/i',
            'sh_preproc',
            3,
            1
        ),
        array(
            '/<!--/i',
            'sh_comment',
            4
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            5,
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
            5,
            1
        )
    ),
    // State #1
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
            2
        )
    ),
    // State #2
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
    // State #3
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
            2
        )
    ),
    // State #4
    array(
        array(
            '/-->/i',
            'sh_comment',
            -2
        ),
        array(
            '/<!--/i',
            'sh_comment',
            4
        )
    ),
    // State #5
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
            2
        )
    )
);
