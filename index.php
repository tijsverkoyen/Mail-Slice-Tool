<?php

// require the css to inline styles class
require_once 'css_to_inline_styles.php';

// check if the file-parameter is provided
if(!isset($_GET['template'])) throw new Exception('template-parameter is required.');
$template = $_GET['template'];
if(!file_exists('./templates/' . $template . '/index.htm')) throw new Exception('File (./templates/' . $template . '/index.htm) does not exists.');
if(!file_exists('./templates/' . $template . '/style.css')) throw new Exception('File (./templates/' . $template . '/style.css) does not exists.');

// grab HTML
$html = file_get_contents('./templates/' . $template . '/index.htm');
$css = file_get_contents('./templates/' . $template . '/style.css');

// create an instance
$cssToInlineStyles = new CSSToInlineStyles();

// set the properties
$cssToInlineStyles->setHTML($html);
$cssToInlineStyles->setCSS($css);

// build the prefix-url
$url = trim($_SERVER['HTTP_HOST'], '/');
$url .= '/';
$url .= trim(dirname($_SERVER['REQUEST_URI']), '/');
$url .= 'templates/' . $template;
$url = 'http://' . trim($url, '/');

// inline the css
$html = $cssToInlineStyles->convert();

// replace some strings
$search = array(
	'{$css}',
	'src="images/',
	'url(\'images/',
	'background="images/',
);
$replace = array(
	$css,
	'src="' . $url . '/images/',
	'url(\'' . $url . '/images/',
	'background="' . $url . '/images/'
);
$html = str_replace($search, $replace, $html);

// output the converted HTML
echo $html;
exit;