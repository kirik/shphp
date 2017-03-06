<?php
/**
 *  SHPHP - Syntax Highlighter in PHP
 *  Language definition file for SQL (modified)
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
 *  Version:    0.1.1
**/

$sh_languages['sql_mod'] = array(
    // State #0
    array(
        array(
            '/\b(?:CHAR|CHARACTER|VARCHAR|BINARY|VARBINARY|TINYBLOB|MEDIUMBLOB|BLOB|LONGBLOB|TINYTEXT|MEDIUMTEXT|TEXT|LONGTEXT|ENUM|' .
            'SET|BIT|BOOL|BOOLEAN|TINYINT|SMALLINT|MEDIUMINT|MIDDLEINT|INT|INTEGER|BIGINT|FLOAT|DOUBLE|REAL|DECIMAL|DEC|FIXED|NUMERIC|' .
            'LONG|SERIAL|DATE|DATETIME|TIME|TIMESTAMP|YEAR)\b/i',
            'sh_type',
            -1
        ),
        array(
            '/\b(?:ACCESS|ADD|ALL|ALTER|ANALYZE|AND|AS|ASC|AUTO_INCREMENT|BDB|BERKELEYDB|BETWEEN|BOTH|BY|CASCADE|CASE|CHANGE|CHARACTERSET|' .
            'CHARSET|COLUMN|COLUMNS|CONSTRAINT|CREATE|CROSS|CURRENT_DATE|CURRENT_TIME|CURRENT_TIMESTAMP|DATABASE|DATABASES|DAY_HOUR|' .
            'DAY_MINUTE|DAY_SECOND|DEC|DEFAULT|DELAYED|DELETE|DESC|DESCRIBE|DISTINCT|DISTINCTROW|DROP|ELSE|ENCLOSED|ESCAPED|EXISTS|EXPLAIN|' .
            'FIELDS|FOR|FOREIGN|FROM|FULLTEXT|FUNCTION|GRANT|GROUP|HAVING|HIGH_PRIORITY|IF|IGNORE|IN|INDEX|INFILE|INNER|INNODB|INSERT|' .
            'INTERVAL|INTO|IS|JOIN|KEY|KEYS|KILL|LEADING|LEFT|LIKE|LIMIT|LINES|LOAD|LOCK|LOW_PRIORITY|MASTER_SERVER_ID|MATCH|MRG_MYISAM|' .
            'NATURAL|NATIONAL|NOT|NULL|NUMERIC|ON|OPTIMIZE|OPTION|OPTIONALLY|OR|ORDER|OUTER|OUTFILE|PARTIAL|PRECISION|PRIMARY|PRIVILEGES|' .
            'PROCEDURE|PURGE|READ|REFERENCES|REGEXP|RENAME|REPLACE|REQUIRE|RESTRICT|RETURNS|REVOKE|RIGHT|RLIKE|SELECT|SET|SHOW|SONAME|' .
            'SQL_BIG_RESULT|SQL_CALC_FOUND_ROWS|SQL_SMALL_RESULT|SSL|STARTING|STRAIGHT_JOIN|STRIPED|TABLE|TABLES|TERMINATED|THEN|TO|TRAILING|' .
            'TRUNCATE|TYPE|UNION|UNIQUE|UNLOCK|UNSIGNED|UPDATE|USAGE|USE|USER_RESOURCES|USING|VALUES|VARYING|WHEN|WHERE|WITH|WRITE|XOR|' .
            'YEAR_MONTH|ZEROFILL)\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/(?:ASCII|ORD|CONV|BIN|OCT|HEX|CHAR|CONCAT|CONCAT_WS|LENGTH|OCTET_LENGTH|CHAR_LENGTH|CHARACTER_LENGTH|BIT_LENGTH|LOCATE|' .
            'POSITION|INSTR|LPAD|RPAD|LEFT|RIGHT|SUBSTRING|SUBSTRING_INDEX|MID|LTRIM|RTRIM|TRIM|SOUNDEX|SPACE|REPLACE|REPEAT|REVERSE|' .
            'INSERT|ELT|FIELD|FIND_IN_SET|MAKE_SET|EXPORT_SET|LCASE|LOWER|UCASE|UPPER|LOAD_FILE|QUOTE|ABS|SIGN|MOD|FLOOR|CEILING|ROUND|' .
            'EXP|LN|LOG|LOG2|LOG10|POW|POWER|SQRT|PI|COS|SIN|TAN|ACOS|ASIN|ATAN|ATAN2|COT|RAND|LEAST|GREATEST|DEGREES|RADIANS|DAYOFWEEK|' .
            'WEEKDAY|DAYOFMONTH|DAYOFYEAR|MONTH|DAYNAME|MONTHNAME|QUARTER|WEEK|YEAR|YEARWEEK|HOUR|MINUTE|SECOND|PERIOD_ADD|PERIOD_DIFF|' .
            'DATE_ADD|DATE_SUB|ADDDATE|SUBDATE|EXTRACT|TO_DAYS|FROM_DAYS|DATE_FORMAT|TIME_FORMAT|CURDATE|CURRENT_DATE|CURTIME|CURRENT_TIME|' .
            'NOW|SYSDATE|CURRENT_TIMESTAMP|UNIX_TIMESTAMP|FROM_UNIXTIME|SEC_TO_TIME|TIME_TO_SEC|CAST|CONVERT|BIT_COUNT|DATABASE|USER|' .
            'SYSTEM_USER|SESSION_USER|PASSWORD|ENCRYPT|ENCODE|DECODE|MD5|SHA1|SHA|AES_ENCRYPT|AES_DECRYPT|DES_ENCRYPT|DES_DECRYPT|' .
            'LAST_INSERT_ID|FORMAT|VERSION|CONNECTION_ID|GET_LOCK|RELEASE_LOCK|IS_FREE_LOCK|BENCHMARK|INET_NTOA|INET_ATON|MASTER_POS_WAIT|' .
            'FOUND_ROWS|COUNT|AVG|MIN|MAX|SUM|STD|STDDEV|BIT_OR|BIT_AND)\s*\(/i',
            'sh_function',
            -1
        ),
        array(
            '/"/',
            'sh_string',
            1
        ),
        array(
            "/'/",
            'sh_string',
            2
        ),
        array(
            '/`/',
            'sh_att',
            3
        ),
        array(
            '/\/\*/',
            'sh_comment',
            5
        ),
        array(
            '/--/',
            'sh_comment',
            4
        ),
        array(
            '/~|!|%|\^|\*|\(|\)|-|\+|=|\[|\]|\\\\|:|;|,|\.|\/|\?|&|<|>|\|/',
            'sh_symbol',
            -1
        ),
        array(
            '/\b[+-]?(?:(?:0x[a-f0-9]+)|(?:(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?))u?(?:(?:int(?:8|16|32|64))|L)?\b/i',
            'sh_number',
            -1
        )
    ),
    // State #1
    array(
        array(
            '/"/',
            'sh_string',
            -2
        ),
        array(
            '/\\\\(?:\\\\|")/',
            'sh_escape',
            -1
        )
    ),
    // State #2
    array(
        array(
            "/'/",
            'sh_string',
            -2
        ),
        array(
            "/\\\\(?:\\\\|')/",
            'sh_escape',
            -1
        )
    ),
    // State #3
    array(
        array(
            '/`/',
            'sh_att',
            -2
        ),
        array(
            '/\\\\./',
            'sh_specialchar',
            -1
        )
    ),
    // State #4
    array(
        array(
            '/\\\\(?:\\\\|")/',
            null,
            -1
        ),
        array(
            '/"/',
            'sh_string',
            -2
        )
    ),
    // State #5
    array(
        array(
            '/\*\//',
            'sh_comment',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
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
