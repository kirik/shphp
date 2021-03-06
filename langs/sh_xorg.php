<?php
$sh_languages['xorg'] = array(
    // State #0
    array(
        array(
            '/#/i',
            'sh_comment',
            1
        ),
        array(
            '/\b[+-]?(?:(?:0x[a-f0-9]+)|(?:(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?))u?(?:(?:int(?:8|16|32|64))|L)?\b/i',
            'sh_number',
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            2
        ),
        array(
            '/\'/i',
            'sh_string',
            3
        ),
        array(
            '/\b(?:End)?(?:Sub)*Section\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/[a-z0-9_]+/i',
            'sh_type',
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
    ),
    // State #2
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
    // State #3
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
