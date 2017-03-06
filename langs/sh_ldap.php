<?php
$sh_languages['ldap'] = array(
    // State #0
    array(
        array(
            '/#/i',
            'sh_comment',
            1
        ),
        array(
            '/(\b[a-z0-9_]+:)((?:[^,=]*$)?)/i',
            array('sh_keyword', 'sh_string'),
            -1
        ),
        array(
            '/([a-z0-9_]+)(=)([^,]+)(,?)/i',
            array('sh_attribute', 'sh_symbol', 'sh_string', 'sh_symbol'),
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
