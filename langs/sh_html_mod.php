<?php
/**
 *  SHPHP - Syntax Highlighter in PHP
 *  Language definition file for HTML (modified)
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
 *  Version:    0.1.1
**/

$sh_languages['html_mod'] = array(
    // State #0
    array(
        array(
            '/<!DOCTYPE/i',
            'sh_doctype',
            3,
            1
        ),
        array(
            '/<!--/',
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
            'sh_variable',
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
            "/\\\\(?:\\\\|')/",
            'sh_escape_alt',
            -1
        ),
        array(
            "/'/",
            'sh_string',
            -2
        )
    ),
    // State #2
    array(
        array(
            '/\\\\(?:\\\\|")/',
            'sh_escape_alt',
            -1
        ),
        array(
            '/"/',
            'sh_string',
            -2
        )
    ),
    // State #3
    array(
        array(
            '/>/',
            'sh_doctype',
            -2
        ),
        array(
            '/([a-z0-9_-]+)(\s*)(=?)/',
            array('sh_att', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            "/'/",
            'sh_string',
            1
        ),
        array(
            '/"/',
            'sh_string',
            2
        )
    ),
    // State #4
    array(
        array(
            '/-->/',
            'sh_comment',
            -2
        ),
        array(
            '/<!--/',
            'sh_comment',
            4
        )
    ),
    // State #5
    array(
        array(
            '/(?:\/)?>/',
            'sh_keyword',
            -2
        ),
        array(
            '/([^="\'\s>]+)(\s*)(=?)/i',
            array('sh_att', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/',
            'sh_string',
            2
        ),
        array(
            "/'/",
            'sh_string',
            1
        )
    )
);
