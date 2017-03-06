<?php
$sh_languages['properties'] = array(
    // State #0
    array(
        array(
            '/#/i',
            'sh_comment',
            1
        ),
        array(
            '/!/i',
            'sh_comment',
            1
        ),
        array(
            '/([^="]+)([ \t]*)(=)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        )
    ),
    // State #1
    array(
        array(
            '/$/i',
            null,
            -2
        )
    )
);
