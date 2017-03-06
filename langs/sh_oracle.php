<?php
$sh_languages['oracle'] = array(
    // State #0
    array(
        array(
            '/\b(?:VARCHAR|TINYINT|TEXT|DATE|SMALLINT|MEDIUMINT|INT|BIGINT|FLOAT|DOUBLE|DECIMAL|DATETIME|TIMESTAMP|TIME|YEAR|UNSIGNED|CHAR|TINYBLOB|TINYTEXT|BLOB|MEDIUMBLOB|MEDIUMTEXT|LONGBLOB|LONGTEXT|ENUM|BOOL|BINARY|VARBINARY|VARCHAR2|NUMBER)\b/i',
            'sh_type',
            -1
        ),
        array(
            '/\b(?:ABORT|ACCEPT|ACCESS|ADD|ADMIN|AFTER|ALL|ALLOCATE|ALTER|ANALYZE|AND|ANY|ARCHIVE|ARCHIVELOG|ARRAY|ARRAYLEN|AS|ASC|ASSERT|ASSIGN|AT|AUDIT|AUTHORIZATION|AVG|BACKUP|BASE_TABLE|BECOME|BEFORE|BEGIN|BETWEEN|BINARY_INTEGER|BLOCK|BODY|BOOLEAN|BUFFER_POOL|BY|CACHE|CANCEL|CASCADE|CASE|CHANGE|CHAR|CHARACTER|CHAR_BASE|CHECK|CHECKPOINT|CLOSE|CLUSTER|CLUSTERS|COBOL|COLAUTH|COLUMN|COLUMNS|COMMENT|COMMIT|COMPILE|COMPRESS|CONNECT|CONSTANT|CONSTRAINT|CONSTRAINTS|CONTENTS|CONTINUE|CONTROLFILE|COUNT|CRASH|CREATE|CURRENT|CURRVAL|CURSOR|CYCLE|DATABASE|DATAFILE|DATA_BASE|DATE|DBA|DEBUGOFF|DEBUGON|DEC|DECIMAL|DECLARE|DEFAULT|DEFINITION|DELAY|DELETE|DELTA|DESC|DIGITS|DISABLE|DISMOUNT|DISPOSE|DISTINCT|DO|DOUBLE|DROP|DUMP|EACH|ELSE|ELSIF|ENABLE|END|ENTRY|ESCAPE|EVENTS|EXCEPT|EXCEPTION|EXCEPTIONS|EXCEPTION_INIT|EXCLUSIVE|EXEC|EXECUTE|EXISTS|EXIT|EXPLAIN|EXTENT|EXTERNALLY|FALSE|FETCH|FILE|FLOAT|FLUSH|FOR|FORCE|FOREIGN|FORM|FORTRAN|FOUND|FREELIST|FREELISTS|FROM|FUNCTION|GENERIC|GO|GOTO|GRANT|GROUP|GROUPS|HAVING|IDENTIFIED|IF|IMMEDIATE|IN|INCLUDING|INCREMENT|INDEX|INDEXES|INDICATOR|INITIAL|INITRANS|INSERT|INSTANCE|INT|INTEGER|INTERSECT|INTO|IS|KEY|LANGUAGE|LAYER|LEVEL|LIKE|LIMITED|LINK|LISTS|LOCK|LOGFILE|LOGGING|LONG|LOOP|MANAGE|MANUAL|MAX|MAXDATAFILES|MAXEXTENTS|MAXINSTANCES|MAXLOGFILES|MAXLOGHISTORY|MAXLOGMEMBERS|MAXTRANS|MAXVALUE|MIN|MINEXTENTS|MINUS|MINVALUE|MLSLABEL|MOD|MODE|MODIFY|MODULE|MONITORING|MOUNT|NATURAL|NEW|NEXT|NEXTVAL|NOARCHIVELOG|NOAUDIT|NOCACHE|NOCOMPRESS|NOCYCLE|NOMAXVALUE|NOMINVALUE|NOMONITORING|NONE|NOORDER|NOPARALLEL|NORESETLOGS|NORMAL|NOSORT|NOT|NOTFOUND|NOWAIT|NULL|NUMBER|NUMBER_BASE|NUMERIC|OF|OFF|OFFLINE|OLD|ON|ONLINE|ONLY|OPEN|OPTIMAL|OPTION|OR|ORDER|OTHERS|OUT|OWN|PACKAGE|PARALLEL|PARTITION|PCTFREE|PCTINCREASE|PCTUSED|PLAN|PLI|POSITIVE|PRAGMA|PRECISION|PRIMARY|PRIOR|PRIVATE|PRIVILEGES|PROCEDURE|PROFILE|PUBLIC|QUOTA|RAISE|RANGE|RAW|READ|REAL|RECORD|RECOVER|REFERENCES|REFERENCING|RELEASE|REMR|RENAME|RESETLOGS|RESOURCE|RESTRICTED|RETURN|REUSE|REVERSE|REVOKE|ROLE|ROLES|ROLLBACK|ROW|ROWID|ROWLABEL|ROWNUM|ROWS|ROWTYPE|RUN|SAVEPOINT|SCHEMA|SCN|SECTION|SEGMENT|SELECT|SEPARATE|SEQUENCE|SESSION|SET|SHARE|SHARED|SIZE|SMALLINT|SNAPSHOT|SOME|SORT|SPACE|SQL|SQLBUF|SQLCODE|SQLERRM|SQLERROR|SQLSTATE|START|STATEMENT|STATEMENT_ID|STATISTICS|STDDEV|STOP|STORAGE|SUBTYPE|SUCCESSFUL|SUM|SWITCH|SYNONYM|SYSDATE|SYSTEM|TABAUTH|TABLE|TABLES|TABLESPACE|TASK|TEMPORARY|TERMINATE|THEN|THREAD|TIME|TO|TRACING|TRANSACTION|TRIGGER|TRIGGERS|TRUE|TRUNCATE|TYPE|UID|UNDER|UNION|UNIQUE|UNLIMITED|UNTIL|UPDATE|USE|USER|USING|VALIDATE|VALUES|VARCHAR|VARCHAR2|VARIANCE|VIEW|VIEWS|WAIT|WHEN|WHENEVER|WHERE|WHILE|WITH|WORK|WRITE|XOR)\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            1
        ),
        array(
            '/\'/i',
            'sh_string',
            2
        ),
        array(
            '/`/i',
            'sh_string',
            3
        ),
        array(
            '/#/i',
            'sh_comment',
            4
        ),
        array(
            '/\/\/\//i',
            'sh_comment',
            5
        ),
        array(
            '/\/\//i',
            'sh_comment',
            4
        ),
        array(
            '/\/\*\*/i',
            'sh_comment',
            11
        ),
        array(
            '/\/\*/i',
            'sh_comment',
            12
        ),
        array(
            '/--/i',
            'sh_comment',
            4
        ),
        array(
            '/~|!|%|\^|\*|\(|\)|-|\+|=|\[|\]|\\\\|:|;|,|\.|\/|\?|&|<|>|\|/i',
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
    // State #2
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
    ),
    // State #3
    array(
        array(
            '/`/i',
            'sh_string',
            -2
        ),
        array(
            '/\\\\./i',
            'sh_specialchar',
            -1
        )
    ),
    // State #4
    array(
        array(
            '/$/i',
            null,
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
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/<\?xml/i',
            'sh_preproc',
            6,
            1
        ),
        array(
            '/<!DOCTYPE/i',
            'sh_preproc',
            8,
            1
        ),
        array(
            '/<!--/i',
            'sh_comment',
            9
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            10,
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
            10,
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
    // State #6
    array(
        array(
            '/\?>/i',
            'sh_preproc',
            -2
        ),
        array(
            '/([^=" \t>]+)([ \t]*)(=?)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            7
        )
    ),
    // State #7
    array(
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
    // State #8
    array(
        array(
            '/>/i',
            'sh_preproc',
            -2
        ),
        array(
            '/([^=" \t>]+)([ \t]*)(=?)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            7
        )
    ),
    // State #9
    array(
        array(
            '/-->/i',
            'sh_comment',
            -2
        ),
        array(
            '/<!--/i',
            'sh_comment',
            9
        )
    ),
    // State #10
    array(
        array(
            '/(?:\/)?>/i',
            'sh_keyword',
            -2
        ),
        array(
            '/([^=" \t>]+)([ \t]*)(=?)/i',
            array('sh_type', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/"/i',
            'sh_string',
            7
        )
    ),
    // State #11
    array(
        array(
            '/\*\//i',
            'sh_comment',
            -2
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
            'sh_url',
            -1
        ),
        array(
            '/<\?xml/i',
            'sh_preproc',
            6,
            1
        ),
        array(
            '/<!DOCTYPE/i',
            'sh_preproc',
            8,
            1
        ),
        array(
            '/<!--/i',
            'sh_comment',
            9
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)(?:\/)?>/i',
            'sh_keyword',
            -1
        ),
        array(
            '/<(?:\/)?[a-z](?:[a-z0-9_:.-]*)/i',
            'sh_keyword',
            10,
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
            10,
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
    // State #12
    array(
        array(
            '/\*\//i',
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
