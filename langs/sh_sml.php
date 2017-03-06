<?php
$sh_languages['sml'] = array(
    // State #0
    array(
        array(
            '/\b(?:external|open|include|[][\w\']*(?=\.))\b/i',
            'sh_preproc',
            -1
        ),
        array(
            '/\b[+-]?(?:(?:0x[a-f0-9]+)|(?:(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?))u?(?:(?:int(?:8|16|32|64))|L)?\b/i',
            'sh_number',
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            1
        ),
        array(
            '/\(\*/i',
            'sh_comment',
            2
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
            '/\b(?:abstraction|abstype|and|andalso|as|before|case|datatype|do|else|end|eqtype|exception|fn|fun|functor|handle|if|in|include|infix|infixr|let|local|nonfix|o|of|op|open|orelse|overload|raise|rec|sharing|sig|signature|struct|structure|then|type|val|where|while|with|withtype)\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/\b(?:int|byte|boolean|char|long|float|double|short|void)\b/i',
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
    ),
    // State #2
    array(
        array(
            '/\*\)/i',
            'sh_comment',
            -2
        ),
        array(
            '/\(\*/i',
            'sh_comment',
            2
        )
    )
);