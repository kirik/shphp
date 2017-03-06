<?php
/**
 *  SHPHP - Syntax Highlighter in PHP
 *  Language definition file for PHP (modified)
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
 *  Version:    0.1.1
**/

$sh_languages['php_mod'] = array(
    // State #0
    array(
        array(
            '/\/\*\*/',
            'sh_comment_hl',
            9
        ),
        array(
            '/\/\*/',
            'sh_comment',
            10
        ),
        array(
            '/\/\/\//',
            'sh_comment_hl',
            4
        ),
        array(
            '/\/\//',
            'sh_comment',
            1
        ),
        array(
            '/#/',
            'sh_comment',
            1
        ),
        array(
            '/\b[+-]?(?:(?:0x[a-f0-9]+)|(?:(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?))u?(?:(?:int(?:8|16|32|64))|L)?\b/i',
            'sh_number',
            -1
        ),
        array(
            '/(<<<)([a-z0-9_]+)/i',
            array('sh_escape', 'heredoc'), // the last element is not a CSS class - it says to parser that it will be heredoc block
            5
        ),
        array(
            '/"/',
            'sh_string',
            2
        ),
        array(
            "/'/",
            'sh_string',
            3
        ),
        array(
            '/\b(?:as|case|default|if|else|elseif|while|do|for|foreach|break|continue|switch|declare|return|require|include|require_once|include_once|endif|endwhile|endfor|endforeach|endswitch)\b/i',
            'sh_control',
            -1
        ),
        array(
            '/(?:\$)[a-z0-9_]+/i',
            'sh_variable',
            -1
        ),
        array(
            '/<\?(?:php|=)?/',
            'sh_keyword',
            -1
        ),
        array(
            '/\?>/',
            'sh_keyword',
            -1
        ),
        array(
            '/~|!|%|\^|\*|\(|\)|-|\+|=|\[|\]|\\\\|:|;|,|\.|\/|\?|&|<|>|\|/',
            'sh_symbol',
            -1
        ),
        array(
            '/\{|\}/',
            'sh_cbracket',
            -1
        ),
        array(
            '/(?:echo)/i',
            'sh_function',
            -1
        ),
        array(
            '/(?:[a-z]|_)[a-z0-9_]*(?=\s*\()/i',
            'sh_function',
            -1
        ),
        array(
            '/\b(?:abstract|catch|class|clone|const|exception|extends|final|function|implements|instanceof|interface|new|self|' .
            'static|parent|private|protected|public|throw|try|and|or|xor|var|__LINE__|__FILE__|__DIR__|__FUNCTION__|__CLASS__|' .
            '__METHOD__|__NAMESPACE__|PHP_VERSION|PHP_MAJOR_VERSION|PHP_MINOR_VERSION|PHP_RELEASE_VERSION|PHP_VERSION_ID|' .
            'PHP_EXTRA_VERSION|PHP_ZTS|PHP_DEBUG|PHP_MAXPATHLEN|PHP_OS|PHP_SAPI|PHP_EOL|PHP_INT_MAX|PHP_INT_SIZE|DEFAULT_INCLUDE_PATH|' .
            'PEAR_INSTALL_DIR|PEAR_EXTENSION_DIR|PHP_EXTENSION_DIR|PHP_PREFIX|PHP_BINDIR|PHP_LIBDIR|PHP_DATADIR|PHP_SYSCONFDIR|' .
            'PHP_LOCALSTATEDIR|PHP_CONFIG_FILE_PATH|PHP_CONFIG_FILE_SCAN_DIR|PHP_SHLIB_SUFFIX|PHP_OUTPUT_HANDLER_START|' .
            'PHP_OUTPUT_HANDLER_CONT|PHP_OUTPUT_HANDLER_END|PHP_WINDOWS_VERSION_MAJOR|PHP_WINDOWS_VERSION_MINOR|PHP_WINDOWS_VERSION_BUILD|' .
            'PHP_WINDOWS_VERSION_PLATFORM|PHP_WINDOWS_VERSION_SP_MAJOR|PHP_WINDOWS_VERSION_SP_MINOR|PHP_WINDOWS_VERSION_SUITEMASK|' .
            'PHP_WINDOWS_VERSION_PRODUCTTYPE|PHP_WINDOWS_NT_DOMAIN_CONTROLLER|PHP_WINDOWS_NT_SERVER|PHP_WINDOWS_NT_WORKSTATION|' .
            'E_ERROR|E_WARNING|E_PARSE|E_NOTICE|E_CORE_ERROR|E_CORE_WARNING|E_COMPILE_ERROR|E_COMPILE_WARNING|E_USER_ERROR|' .
            'E_USER_WARNING|E_USER_NOTICE|E_DEPRECATED|E_USER_DEPRECATED|E_ALL|E_STRICT|__COMPILER_HALT_OFFSET__|TRUE|FALSE|NULL|' .
            'EXTR_OVERWRITE|EXTR_SKIP|EXTR_PREFIX_SAME|EXTR_PREFIX_ALL|EXTR_PREFIX_INVALID|EXTR_PREFIX_IF_EXISTS|EXTR_IF_EXISTS|' .
            'SORT_ASC|SORT_DESC|SORT_REGULAR|SORT_NUMERIC|SORT_STRING|CASE_LOWER|CASE_UPPER|COUNT_NORMAL|COUNT_RECURSIVE|' .
            'ASSERT_ACTIVE|ASSERT_CALLBACK|ASSERT_BAIL|ASSERT_WARNING|ASSERT_QUIET_EVAL|CONNECTION_ABORTED|CONNECTION_NORMAL|' .
            'CONNECTION_TIMEOUT|INI_USER|INI_PERDIR|INI_SYSTEM|INI_ALL|M_LOG2E|M_LOG10E|M_LN2|M_LN10|M_PI|M_PI_2|M_PI_4|M_1_PI|' .
            'M_2_PI|M_2_SQRTPI|M_SQRT2|M_SQRT1_2|CRYPT_SALT_LENGTH|CRYPT_STD_DES|CRYPT_EXT_DES|CRYPT_MD5|CRYPT_BLOWFISH|' .
            'DIRECTORY_SEPARATOR|SEEK_SET|SEEK_CUR|SEEK_END|LOCK_SH|LOCK_EX|LOCK_UN|LOCK_NB|HTML_SPECIALCHARS|HTML_ENTITIES|' .
            'ENT_COMPAT|ENT_QUOTES|ENT_NOQUOTES|INFO_GENERAL|INFO_CREDITS|INFO_CONFIGURATION|INFO_MODULES|INFO_ENVIRONMENT|' .
            'INFO_VARIABLES|INFO_LICENSE|INFO_ALL|CREDITS_GROUP|CREDITS_GENERAL|CREDITS_SAPI|CREDITS_MODULES|CREDITS_DOCS|' .
            'CREDITS_FULLPAGE|CREDITS_QA|CREDITS_ALL|STR_PAD_LEFT|STR_PAD_RIGHT|STR_PAD_BOTH|PATHINFO_DIRNAME|PATHINFO_BASENAME|' .
            'PATHINFO_EXTENSION|PATH_SEPARATOR|CHAR_MAX|LC_CTYPE|LC_NUMERIC|LC_TIME|LC_COLLATE|LC_MONETARY|LC_ALL|LC_MESSAGES|' .
            'ABDAY_1|ABDAY_2|ABDAY_3|ABDAY_4|ABDAY_5|ABDAY_6|ABDAY_7|DAY_1|DAY_2|DAY_3|DAY_4|DAY_5|DAY_6|DAY_7|ABMON_1|ABMON_2|' .
            'ABMON_3|ABMON_4|ABMON_5|ABMON_6|ABMON_7|ABMON_8|ABMON_9|ABMON_10|ABMON_11|ABMON_12|MON_1|MON_2|MON_3|MON_4|MON_5|' .
            'MON_6|MON_7|MON_8|MON_9|MON_10|MON_11|MON_12|AM_STR|PM_STR|D_T_FMT|D_FMT|T_FMT|T_FMT_AMPM|ERA_YEAR|ERA_D_T_FMT|' .
            'ERA_D_FMT|ERA_T_FMT|ALT_DIGITS|INT_CURR_SYMBOL|CURRENCY_SYMBOL|CRNCYSTR|MON_DECIMAL_POINT|MON_THOUSANDS_SEP|' .
            'MON_GROUPING|POSITIVE_SIGN|NEGATIVE_SIGN|INT_FRAC_DIGITS|FRAC_DIGITS|P_CS_PRECEDES|P_SEP_BY_SPACE|N_CS_PRECEDES|' .
            'N_SEP_BY_SPACE|P_SIGN_POSN|N_SIGN_POSN|DECIMAL_POINT|RADIXCHAR|THOUSANDS_SEP|THOUSEP|GROUPING|YESEXPR|NOEXPR|YESSTR|' .
            'NOSTR|CODESET|LOG_EMERG|LOG_ALERT|LOG_CRIT|LOG_ERR|LOG_WARNING|LOG_NOTICE|LOG_INFO|LOG_DEBUG|LOG_KERN|LOG_USER|' .
            'LOG_MAIL|LOG_DAEMON|LOG_AUTH|LOG_SYSLOG|LOG_LPR|LOG_NEWS|LOG_UUCP|LOG_CRON|LOG_AUTHPRIV|LOG_LOCAL0|LOG_LOCAL1|' .
            'LOG_LOCAL2|LOG_LOCAL3|LOG_LOCAL4|LOG_LOCAL5|LOG_LOCAL6|LOG_LOCAL7|LOG_PID|LOG_CONS|LOG_ODELAY|LOG_NDELAY|LOG_NOWAIT|' .
            'LOG_PERROR|PREG_(?:[_A-Z]+))\b/i',
            'sh_keyword',
            -1
        )
    ),
    // State #1
    array(
        array(
            '/$/',
            null,
            -2
        )
    ),
    // State #2
    array(
        array(
            '/\\\\(?:\\\\|"|n|r|t|\$)/i',
            'sh_escape',
            -1
        ),
        array(
            '/"/',
            'sh_string',
            -2
        ),
        array(
            '/(?:\$)[a-z0-9_\[\]]+/i',
            'sh_variable',
            -1
        ),
        array(
            '/\{(?:\$)[a-z0-9_\[\]"\']+\}/i',
            'sh_variable',
            -1
        ),
        array(
            '/(?:\$)[a-z0-9_]+/i',
            'sh_variable',
            -1
        )
    ),
    // State #3
    array(
        array(
            '/\\\\(?:\\\\|\')/',
            'sh_escape',
            -1
        ),
        array(
            "/'/",
            'sh_string',
            -2
        )
    ),
    // State #4
    array(
        array(
            '/$/',
            null,
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/\S+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            8,
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
            8,
            1
        ),
        array(
            '/@[a-z]+/i',
            'sh_type',
            -1
        ),
        array(
            '/(?:TODO|FIXME|BUG)(?:[:]?)/i',
            'sh_todo',
            -1
        )
    ),
    // State #5
    array(
        array( // heredoc placeholder !!! do not move this array from the 0 position
            null,
            'sh_escape',
            -2
        ),
        array(
            '/\\\\(?:\\\\|"|n|r|t|\$)/i',
            'sh_escape',
            -1
        ),
        array(
            '/(?:\$)[a-z0-9_\[\]]+/i',
            'sh_variable',
            -1
        ),
        array(
            '/\{(?:\$)[a-z0-9_\[\]"\']+\}/i',
            'sh_variable',
            -1
        ),
        array(
            '/(?:\$)[a-z0-9_]+/i',
            'sh_variable',
            -1
        ),
        array(
            '/./',
            'sh_string',
            -1
        )
    ),
    // State #6
    array(
        // Moose was here
    ),
    // State #7
    array(
        // Moose was here
    ),
    // State #8
    array(
        array(
            '/(?:\/)?>/',
            'sh_keyword',
            -2
        ),
        array(
            '/([^="\s>]+)([\s]*)(=?)/',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/',
            'sh_string',
            2
        )
    ),
    // State #9
    array(
        array(
            '/\*\//',
            'sh_comment_hl',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/\S+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            8,
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
            8,
            1
        ),
        array(
            '/@[a-z]+/i',
            'sh_type',
            -1
        ),
        array(
            '/(?:TODO|FIXME|BUG)(?:[:]?)/i',
            'sh_todo',
            -1
        )
    ),
    // State #10
    array(
        array(
            '/\*\//',
            'sh_comment',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/\S+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/(?:TODO|FIXME|BUG)(?:[:]?)/i',
            'sh_todo',
            -1
        )
    )
);
