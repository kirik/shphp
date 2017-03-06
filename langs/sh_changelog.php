<?php
$sh_languages['changelog'] = array(
    // State #0
    array(
        array(
            '/[\d]{2,4}-?[\d]{2}-?[\d]{2}/i',
            'sh_date',
            1,
            1
        ),
        array(
            '/(^[ \t]+)(\*)([ \t]+)((?:[^:]+\:)?)/i',
            array('sh_normal', 'sh_symbol', 'sh_normal', 'sh_file'),
            -1
        ),
        array(
            '/(^[ \t]+)((?:[^:]+\:)?)/i',
            array('sh_normal', 'sh_file'),
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
            '/(?:[a-z0-9_]|[`~!@#$%&*()_=+{}|;:",<.>\/?\'\\\\[\]\^\-])+/i',
            'sh_name',
            -1
        )
    )
);
