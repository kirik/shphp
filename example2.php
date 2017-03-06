<?php
/**
 *  SHPHP - Example with autoload (or by defining the languages variable) and modified LDF and CSS
 *  Developer:  kirik [kirik-san@users.sourceforge.net]
 *  Website:    http://sourceforge.net/projects/shphp/ (all details you can find here)
**/

error_reporting(E_ALL | E_STRICT);
header('Content-Type: text/html; charset=utf-8');

// Set multibyte encoding
mb_regex_encoding('UTF-8');
mb_internal_encoding('UTF-8');

// Include base scripts
include('./includes/mb_functions.php');
include('./includes/sh_main.php');

/// Autoload
// We need to set path to LDF
SHPHP::$langs_dir = dirname(__FILE__) . '/langs';

/// Or to define the languages variable:
// include('./langs/sh_sql_mod.php');
// include('./langs/sh_html_mod.php');
// include('./langs/sh_php_mod.php');
// SHPHP::$languages = $sh_languages;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>SHPHP - Syntax Highliter in PHP</title>
<!-- set modified theme -->
<link rel="stylesheet" type="text/css" href="css/sh_kwrite_mod.css" />
</head>
<body>
<?
// Define PHP string
$php_string = '
error_reporting(E_ALL | E_STRICT);
if(!isset($var))
{
    $var = "some string here";
}';

// Define HTML string
$html_string = '<div style="color: #fff;">
    <b>some string here</b>
</div>';

// Define SQL string
$sql_string = 'SELECT `id`, `column` FROM `table` WHERE `id` = 1 ORDER BY `date` LIMIT 1';
?>

<h3>Highlite PHP:</h3>
<pre class="sh_sourceCode"><?php echo SHPHP::highlight($php_string, 'php_mod'); ?></pre>

<h3>Highlite HTML:</h3>
<pre class="sh_sourceCode"><?php echo SHPHP::highlight($html_string, 'html_mod'); ?></pre>

<h3>Highlite SQL:</h3>
<pre class="sh_sourceCode"><?php echo SHPHP::highlight($sql_string, 'sql_mod'); ?></pre>

</body>
</html>