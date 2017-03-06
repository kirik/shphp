<?php
$sh_languages['log'] = array(
    // State #0
    array(
        array(
            '/^[a-z]{3}[ \t]{1,2}[\d]{1,2}(?=[ \t][\d]{2}:[\d]{2}:[\d]{2})/i',
            'sh_date',
            1,
            1
        ),
        array(
            '/^[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\b/i',
            'sh_ip',
            6,
            1
        ),
        array(
            '/^\[[a-z]{3}[ \t][a-z]{3}[ \t]{1,2}[\d]{1,2}[ \t](?=[\d]{2}:[\d]{2}:[\d]{2})/i',
            'sh_date',
            8,
            1
        ),
        array(
            '/[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\b/i',
            'sh_ip',
            -1
        ),
        array(
            '/\b(?:root|failure)\b/i',
            'sh_string',
            -1
        ),
        array(
            '/((?:port|pid)[ \t])([\d]+)/i',
            array('sh_normal', 'sh_port'),
            -1
        ),
        array(
            '/[ \t](?=(?:IN|OUT)=)/i',
            'sh_normal',
            9,
            1
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
            '/\b[\d]{2}:[\d]{2}:[\d]{2}\b/i',
            'sh_time',
            2,
            1
        )
    ),
    // State #2
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/[^ \t]+/i',
            'sh_symbol',
            3,
            1
        )
    ),
    // State #3
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/:/i',
            'sh_normal',
            -3
        ),
        array(
            '/[^:\(\[]+/i',
            'sh_function',
            -1
        ),
        array(
            '/\[/i',
            'sh_number',
            4
        ),
        array(
            '/\(/i',
            'sh_number',
            5
        )
    ),
    // State #4
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/\]/i',
            'sh_number',
            -2
        )
    ),
    // State #5
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/\)/i',
            'sh_number',
            -2
        )
    ),
    // State #6
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/[a-z0-9]+(?=[ \t]\[[\d]{2}\/[a-z]{3}\/[\d]{4})/i',
            'sh_string',
            -1
        ),
        array(
            '/[\d]{2}\/[a-z]{3}\/[\d]{4}(?=:[\d]{2}:[\d]{2}:[\d]{2})/i',
            'sh_date',
            -1
        ),
        array(
            '/[\d]{2}:[\d]{2}:[\d]{2}[ \t][+-][\d]{4}/i',
            'sh_time',
            -1
        ),
        array(
            '/[1-5][\d]{2}[ \t][-0-9]+/i',
            'sh_twonumbers',
            -1
        ),
        array(
            '/\b(?:OPTIONS|GET|HEAD|POST|PUT|DELETE|TRACE|CONNECT|PROPFIND|MKCOL|COPY|MOVE|LOCK|UNLOCK)\b/i',
            'sh_webmethod',
            7,
            1
        )
    ),
    // State #7
    array(
        array(
            '/[^ \t]+/i',
            'sh_string',
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
            '/\b[\d]{2}:[\d]{2}:[\d]{2}\b/i',
            'sh_time',
            -1
        ),
        array(
            '/[\d]{4}\]|\[[a-z]{3}[ \t][a-z]{3}[ \t]{1,2}[\d]{1,2}[ \t](?=[\d]{2}:[\d]{2}:[\d]{2})/i',
            'sh_date',
            -1
        ),
        array(
            '/\[error\]/i',
            'sh_string',
            -1
        ),
        array(
            '/\[notice\]/i',
            'sh_comment',
            -1
        ),
        array(
            '/[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\b/i',
            'sh_ip',
            -1
        )
    ),
    // State #9
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/(?:IN|OUT|PROTO)=(?=[^ \t]+)/i',
            'sh_normal',
            7,
            1
        ),
        array(
            '/(?:SPT|DPT|TYPE|SEQ)=(?=[^ \t]+)/i',
            'sh_normal',
            10,
            1
        ),
        array(
            '/\b(?:CWR|ECE|URG|ACK|PSH|RST|SYN|FIN)\b/i',
            'sh_number',
            -1
        ),
        array(
            '/[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\.[\d]{1,3}\b/i',
            'sh_ip',
            -1
        )
    ),
    // State #10
    array(
        array(
            '/[^ \t]+/i',
            'sh_cbracket',
            -2
        )
    )
);
