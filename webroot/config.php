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
define('GLOSOLI_INSTALL_PATH', __DIR__ . '/..');
define('GLOSOLI_THEME_PATH', GLOSOLI_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(GLOSOLI_INSTALL_PATH . '/src/bootstrap.php');
 
 
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
$glosoli['title_append'] = ' | en webbtemplate';

/**
 * Theme related settings.
 *
 */
$glosoli['stylesheets'] = array('css/style.css');
$glosoli['favicon']    = 'img/favicon.ico';
