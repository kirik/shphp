<?php
$sh_languages['diff'] = array(
    // State #0
    array(
        array(
            '/(?=^[-]{3})/i',
            'sh_oldfile',
            1,
            1
        ),
        array(
            '/(?=^[*]{3})/i',
            'sh_oldfile',
            3,
            1
        ),
        array(
            '/(?=^[\d])/i',
            'sh_difflines',
            6,
            1
        )
    ),
    // State #1
    array(
        array(
            '/^[-]{3}/i',
            'sh_oldfile',
            2
        ),
        array(
            '/^[-]/i',
            'sh_oldfile',
            2
        ),
        array(
            '/^[+]/i',
            'sh_newfile',
            2
        ),
        array(
            '/^@@/i',
            'sh_difflines',
            2
        )
    ),
    // State #2
    array(
        array(
            '/$/i',
            null,
            -2
        )
    ),
    // State #3
    array(
        array(
            '/^[*]{3}[ \t]+[\d]/i',
            'sh_oldfile',
            4
        ),
        array(
            '/^[*]{3}/i',
            'sh_oldfile',
            2
        ),
        array(
            '/^[-]{3}[ \t]+[\d]/i',
            'sh_newfile',
            5
        ),
        array(
            '/^[-]{3}/i',
            'sh_newfile',
            2
        )
    ),
    // State #4
    array(
        array(
            '/^[\s]/i',
            'sh_normal',
            2
        ),
        array(
            '/(?=^[-]{3})/i',
            'sh_newfile',
            -2
        )
    ),
    // State #5
    array(
        array(
            '/^[\s]/i',
            'sh_normal',
            2
        ),
        array(
            '/(?=^[*]{3})/i',
            'sh_newfile',
            -2
        ),
        array(
            '/^diff/i',
            'sh_normal',
            2
        )
    ),
    // State #6
    array(
        array(
            '/^[\d]/i',
            'sh_difflines',
            2
        ),
        array(
            '/^[<]/i',
            'sh_oldfile',
            2
        ),
        array(
            '/^[>]/i',
            'sh_newfile',
            2
        )
    )
);
