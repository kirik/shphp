<?php
$sh_languages['perl'] = array(
    // State #0
    array(
        array(
            '/\b(?:import)\b/i',
            'sh_preproc',
            -1
        ),
        array(
            '/(s)(\{(?:\\\\\}|[^}])*\}\{(?:\\\\\}|[^}])*\})([ixsmogce]*)/i',
            array('sh_keyword', 'sh_regexp', 'sh_keyword'),
            -1
        ),
        array(
            '/(s)(\((?:\\\\\)|[^)])*\)\((?:\\\\\)|[^)])*\))([ixsmogce]*)/i',
            array('sh_keyword', 'sh_regexp', 'sh_keyword'),
            -1
        ),
        array(
            '/(s)(\[(?:\\\\\]|[^\]])*\]\[(?:\\\\\]|[^\]])*\])([ixsmogce]*)/i',
            array('sh_keyword', 'sh_regexp', 'sh_keyword'),
            -1
        ),
        array(
            '/(s)(<.*><.*>)([ixsmogce]*)/i',
            array('sh_keyword', 'sh_regexp', 'sh_keyword'),
            -1
        ),
        array(
            '/(q(?:q?))(\{(?:\\\\\}|[^}])*\})/i',
            array('sh_keyword', 'sh_string'),
            -1
        ),
        array(
            '/(q(?:q?))(\((?:\\\\\)|[^)])*\))/i',
            array('sh_keyword', 'sh_string'),
            -1
        ),
        array(
            '/(q(?:q?))(\[(?:\\\\\]|[^\]])*\])/i',
            array('sh_keyword', 'sh_string'),
            -1
        ),
        array(
            '/(q(?:q?))(<.*>)/i',
            array('sh_keyword', 'sh_string'),
            -1
        ),
        array(
            '/(q(?:q?))([^a-z0-9 \t])(.*\2)/i',
            array('sh_keyword', 'sh_string', 'sh_string'),
            -1
        ),
        array(
            '/(s)([^a-z0-9 \t])(.*\2.*\2)([ixsmogce]*(?=[ \t]*(?:\)|;)))/i',
            array('sh_keyword', 'sh_regexp', 'sh_regexp', 'sh_keyword'),
            -1
        ),
        array(
            '/(s)([^a-z0-9 \t])(.*\2[ \t]*)([^a-z0-9 \t])(.*\4)([ixsmogce]*(?=[ \t]*(?:\)|;)))/i',
            array('sh_keyword', 'sh_regexp', 'sh_regexp', 'sh_regexp', 'sh_regexp', 'sh_keyword'),
            -1
        ),
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
            '/(?:m|qr)(?=\{)/i',
            'sh_keyword',
            2
        ),
        array(
            '/(?:m|qr)(?=#)/i',
            'sh_keyword',
            4
        ),
        array(
            '/(?:m|qr)(?=\|)/i',
            'sh_keyword',
            6
        ),
        array(
            '/(?:m|qr)(?=@)/i',
            'sh_keyword',
            8
        ),
        array(
            '/(?:m|qr)(?=<)/i',
            'sh_keyword',
            10
        ),
        array(
            '/(?:m|qr)(?=\[)/i',
            'sh_keyword',
            12
        ),
        array(
            '/(?:m|qr)(?=\\\\)/i',
            'sh_keyword',
            14
        ),
        array(
            '/(?:m|qr)(?=\/)/i',
            'sh_keyword',
            16
        ),
        array(
            '/"/i',
            'sh_string',
            18
        ),
        array(
            '/\'/i',
            'sh_string',
            19
        ),
        array(
            '/</i',
            'sh_string',
            20
        ),
        array(
            '/\/[^\n]*\//i',
            'sh_string',
            -1
        ),
        array(
            '/\b(?:chomp|chop|chr|crypt|hex|i|index|lc|lcfirst|length|oct|ord|pack|q|qq|reverse|rindex|sprintf|substr|tr|uc|ucfirst|m|s|g|qw|abs|atan2|cos|exp|hex|int|log|oct|rand|sin|sqrt|srand|my|local|our|delete|each|exists|keys|values|pack|read|syscall|sysread|syswrite|unpack|vec|undef|unless|return|length|grep|sort|caller|continue|dump|eval|exit|goto|last|next|redo|sub|wantarray|pop|push|shift|splice|unshift|split|switch|join|defined|foreach|last|chop|chomp|bless|dbmclose|dbmopen|ref|tie|tied|untie|while|next|map|eq|die|cmp|lc|uc|and|do|if|else|elsif|for|use|require|package|import|chdir|chmod|chown|chroot|fcntl|glob|ioctl|link|lstat|mkdir|open|opendir|readlink|rename|rmdir|stat|symlink|umask|unlink|utime|binmode|close|closedir|dbmclose|dbmopen|die|eof|fileno|flock|format|getc|print|printf|read|readdir|rewinddir|seek|seekdir|select|syscall|sysread|sysseek|syswrite|tell|telldir|truncate|warn|write|alarm|exec|fork|getpgrp|getppid|getpriority|kill|pipe|qx|setpgrp|setpriority|sleep|system|times|x|wait|waitpid)\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/^\=(?:head1|head2|item)/i',
            'sh_comment',
            21
        ),
        array(
            '/(?:\$[#]?|@|%)[\/a-z0-9_]+/i',
            'sh_variable',
            -1
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
            '/(?:[a-z]|_)[a-z0-9_]*(?=[ \t]*\()/i',
            'sh_function',
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
            '/\{/i',
            'sh_regexp',
            3
        )
    ),
    // State #3
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\\{|\\\\\}|\}/i',
            'sh_regexp',
            -3
        )
    ),
    // State #4
    array(
        array(
            '/#/i',
            'sh_regexp',
            5
        )
    ),
    // State #5
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\#|#/i',
            'sh_regexp',
            -3
        )
    ),
    // State #6
    array(
        array(
            '/\|/i',
            'sh_regexp',
            7
        )
    ),
    // State #7
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\\||\|/i',
            'sh_regexp',
            -3
        )
    ),
    // State #8
    array(
        array(
            '/@/i',
            'sh_regexp',
            9
        )
    ),
    // State #9
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\@|@/i',
            'sh_regexp',
            -3
        )
    ),
    // State #10
    array(
        array(
            '/</i',
            'sh_regexp',
            11
        )
    ),
    // State #11
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\<|\\\\>|>/i',
            'sh_regexp',
            -3
        )
    ),
    // State #12
    array(
        array(
            '/\[/i',
            'sh_regexp',
            13
        )
    ),
    // State #13
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\]|\]/i',
            'sh_regexp',
            -3
        )
    ),
    // State #14
    array(
        array(
            '/\\\\/i',
            'sh_regexp',
            15
        )
    ),
    // State #15
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\\\\\|\\\\/i',
            'sh_regexp',
            -3
        )
    ),
    // State #16
    array(
        array(
            '/\//i',
            'sh_regexp',
            17
        )
    ),
    // State #17
    array(
        array(
            '/[ \t]+#.*/i',
            'sh_comment',
            -1
        ),
        array(
            '/\$(?:[a-z0-9_]+|\{[a-z0-9_]+\})/i',
            'sh_variable',
            -1
        ),
        array(
            '/\\\\\/|\//i',
            'sh_regexp',
            -3
        )
    ),
    // State #18
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
    // State #19
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/\\\\(?:\\\\|\')/i',
            null,
            -1
        ),
        array(
            '/\'/i',
            'sh_string',
            -2
        )
    ),
    // State #20
    array(
        array(
            '/$/i',
            null,
            -2
        ),
        array(
            '/>/i',
            'sh_string',
            -2
        )
    ),
    // State #21
    array(
        array(
            '/\=cut/i',
            'sh_comment',
            -2
        )
    )
);
