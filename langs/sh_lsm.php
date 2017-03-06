<?php
$sh_languages['lsm'] = array(
    // State #0
    array(
        array(
            '/\b(?:Begin[\d]*|End)\b/i',
            'sh_keyword',
            -1
        ),
        array(
            '/^[a-z0-9_-]+:/i',
            'sh_type',
            -1
        ),
        array(
            '/(?:<?)[a-z0-9_\.\/\-_~]+@[a-z0-9_\.\/\-_~]+(?:>?)|(?:<?)[a-z0-9_]+:\/\/[a-z0-9_\.\/\-_~]+(?:>?)/i',
            'sh_url',
            -1
        )
    )
);
