<?php
/**
 * Config-file for glosoli. Change settings here to affect installation.
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
 * Define glosoli paths.
 *
 */
define('glosoli_INSTALL_PATH', __DIR__ . '/..');
define('glosoli_THEME_PATH', glosoli_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(glosoli_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the glosoli variable.
 *
 */
$glosoli = array();
 
 
/**
 * Site wide settings.
 *
 */
$glosoli['lang']         = 'sv';
$glosoli['title_append'] = ' | glosoli en webbtemplate';

/**
 * Settings for JavaScript.
 *
 */
$glosoli['modernizr'] = 'js/modernizr.js';

/**
 * Settings for JavaScript.
 *
 */
$glosoli['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$glosoli['jquery'] = null; // To disable jQuery

/**
 * Settings for JavaScript.
 *
 */
$glosoli['javascript_include'] = array();
//$glosoli['javascript_include'] = array('js/main.js'); // To add extra javascript files