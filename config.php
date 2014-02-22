<?php
/**
 * Config-file for Shire. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Shire paths.
 *
 */
define('SHIRE_INSTALL_PATH', __DIR__ . '/Shire');
define('SHIRE_THEME_PATH', SHIRE_INSTALL_PATH . '/theme/render.php');
/**
 * Include bootstrapping functions.
 *
 */
include(SHIRE_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Shire variable.
 *
 */
$shire = array();
 
 
/**
 * Site wide settings.
 *
 */
$shire['lang']         = 'sv';
$shire['title_append'] = ' | BigBait';

/**
 * Theme related settings.
 *
 */
$shire['stylesheets'] = array('css/style.css');
$shire['favicon']    = 'favicon.ico';

/**
* The header
*
*/
$shire['header'] = <<<EOD
<img class='sitelogo' src='img/BigBait-Logo/BigBait-Logo/Liten version/BigBait-Logo-Liten.png' alt='BigBait Logo' />
<h2>Denna sida är under utveckling</h2>
EOD;

/**
* The nav menu
*
*/
$shire['navMenu'] = array(
	'items' => array(
		'home' => array('text' =>'Hem', 'url' =>'index.php'),
		'products' => array('text' =>'Produkter', 'url' =>'products.php'),
		'about' => array('text' =>'Om Oss', 'url' =>'about.php'),
		'order' => array('text' => 'Beställ', 'url' => 'order.php')
	),
	'callback_selected' => function($url) {
    	if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      		return true;
    	}
	}
);
	

/**
* The footer
*
*/
$shire['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Patrik Eliasson (pael10@student.bth.se) | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

