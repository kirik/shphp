<?php
/**
 *  SHPHP - Syntax Highlighter in PHP
 *  Language definition file for Javascript (modified)
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
 *  Version:    0.1.1
**/

$sh_languages['js_mod'] = array(
    // State #0
    array(
        array(
            '/\/\//',
            'sh_comment',
            7
        ),
        array(
            '/\/\*/',
            'sh_comment',
            9
        ),
        array(
            '/\b(?:abstract|break|case|catch|class|const|continue|debugger|default|delete|do|else|enum|export|extends|false|final|finally|for|' .
            'function|goto|if|implements|in|instance\s*of|interfaceof|native|new|null|private|protected|prototype|public|return|static|super|' .
            'switch|synchronized|throw|throws|this|transient|true|try|typeof|var|volatile|while|with)\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/(\+\+|--|\)|\])(\s*)(\/=?(?![*\/]))/',
            array('sh_symbol', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/(0x[a-f0-9]+|(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?)(\s*)(\/(?![*\/]))/i',
            array('sh_number', 'sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/([a-z$_][a-z0-9$_]*\s*)(\/=?(?![*\/]))/i',
            array('sh_normal', 'sh_symbol'),
            -1
        ),
        array(
            '/\/(?:\\\\.|[^*\\\\\/])(?:\\\\.|[^\\\\\/])*\/[gim]*/i',
            'sh_regexp',
            -1
        ),
        array(
            '/\b[+-]?(?:(?:0x[a-f0-9]+)|(?:(?:[\d]*\.)?[\d]+(?:[eE][+-]?[\d]+)?))u?(?:(?:int(?:8|16|32|64))|L)?\b/i',
            'sh_number',
            -1
        ),
        array(
            '/"/',
            'sh_string',
            10
        ),
        array(
            "/'/",
            'sh_escape_alt',
            11
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
            '/\b(?:Math|Infinity|NaN|undefined|arguments)\b/i',
            'sh_predef_var',
            -1
        ),
        array(
            '/\b(?:Anchor|Applet|Area|Array|Boolean|Button|Checkbox|Date|document|window|Image|FileUpload|Form|Frame|Function|Hidden|' .
            'Link|MimeType|Math|Max|Min|Layer|navigator|Object|Password|Plugin|Radio|RegExp|Reset|Screen|Select|String|Text|Textarea|this|Window)\b/i',
            'sh_object',
            -1
        ),
        array(
            '/\b(?:above|action|alinkColor|alert|anchor|anchors|appCodeName|applets|apply|appName|appVersion|argument|arguments|arity|' .
            'availHeight|availWidth|back|background|below|bgColor|border|big|blink|blur|bold|border|call|caller|charAt|charCodeAt|checked|' .
            'clearInterval|clearTimeout|click|clip|close|closed|colorDepth|complete|compile|constructor|confirm|cookie|current|cursor|' .
            'data|defaultChecked|defaultSelected|defaultStatus|defaultValue|description|disableExternalCapture|domain|elements|embeds|' .
            'enabledPlugin|enableExternalCapture|encoding|eval|exec|fgColor|filename|find|fixed|focus|fontcolor|fontsize|form|forms|' .
            'formName|forward|frames|fromCharCode|getDate|getDay|getHours|getMiliseconds|getMinutes|getMonth|getSeconds|getSelection|' .
            'getTime|getTimezoneOffset|getUTCDate|getUTCDay|getUTCFullYear|getUTCHours|getUTCMilliseconds|getUTCMinutes|getUTCMonth|' .
            'getUTCSeconds|getYear|global|go|hash|height|history|home|host|hostname|href|hspace|ignoreCase|images|index|indexOf|innerHeight|' .
            'innerWidth|input|italics|javaEnabled|join|language|lastIndex|lastIndexOf|lastModified|lastParen|layers|layerX|layerY|left|' .
            'leftContext|length|link|linkColor|links|location|locationbar|load|lowsrc|match|MAX_VALUE|menubar|method|mimeTypes|MIN_VALUE|' .
            'modifiers|moveAbove|moveBelow|moveBy|moveTo|moveToAbsolute|multiline|name|NaN|NEGATIVE_INFINITY|negative_infinity|next|open|' .
            'opener|options|outerHeight|outerWidth|pageX|pageY|pageXoffset|pageYoffset|parent|parse|pathname|personalbar|pixelDepth|platform|' .
            'plugins|pop|port|POSITIVE_INFINITY|positive_infinity|preference|previous|print|prompt|protocol|prototype|push|referrer|refresh|' .
            'releaseEvents|reload|replace|reset|resizeBy|resizeTo|reverse|rightContext|screenX|screenY|scroll|scrollbar|scrollBy|scrollTo|' .
            'search|select|selected|selectedIndex|self|setDate|setHours|setMinutes|setMonth|setSeconds|setTime|setTimeout|setUTCDate|' .
            'setUTCDay|setUTCFullYear|setUTCHours|setUTCMilliseconds|setUTCMinutes|setUTCMonth|setUTCSeconds|setYear|shift|siblingAbove|' .
            'siblingBelow|small|sort|source|splice|split|src|status|statusbar|strike|sub|submit|substr|substring|suffixes|sup|taintEnabled|' .
            'target|test|text|title|toGMTString|toLocaleString|toLowerCase|toolbar|toSource|toString|top|toUpperCase|toUTCString|type|URL|' .
            'unshift|unwatch|userAgent|UTC|value|valueOf|visibility|vlinkColor|vspace|width|watch|which|width|write|writeln|x|y|zIndex)\b/i',
            'sh_method',
            -1
        ),
        array(
            '/\b(?:escape|isFinite|isNaN|Number|parseFloat|parseInt|reload|taint|unescape|untaint|write)\b/i',
            'sh_function',
            -1
        )
    ),
    // State #1
    array(
        // Moose was here
    ),
    // State #2
    array(
        // Moose was here
    ),
    // State #3
    array(
        // Moose was here
    ),
    // State #4
    array(
        // Moose was here
    ),
    // State #5
    array(
        // Moose was here
    ),
    // State #6
    array(
        // Moose was here
    ),
    // State #7
    array(
        array(
            '/$/',
            null,
            -2
        )
    ),
    // State #8
    array(
        // Moose was here
    ),
    // State #9
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
    ),
    // State #10
    array(
        array(
            '/\\\\(?:\\\\|"|n|r|t|\$)/i',
            'sh_escape_alt',
            -1
        ),
        array(
            '/$/',
            'sh_string',
            -2
        ),
        array(
            '/"/',
            'sh_string',
            -2
        )
    ),
    // State #11
    array(
        array(
            '/\\\\(?:\\\\|\')/',
            'sh_escape_alt',
            -1
        ),
        array(
            '/$/',
            'sh_string',
            -2
        ),
        array(
            "/'/",
            'sh_escape_alt',
            -2
        )
    )
);
