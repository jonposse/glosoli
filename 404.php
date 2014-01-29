<?php 
/**
 * This is a glosoli pagecontroller.
 *
 */
// Include the essential config-file which also creates the $glosoli variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the glosoli container.
$glosoli['title'] = "404";
$glosoli['header'] = "";
$glosoli['main'] = "This is a glosoli 404. Document is not here.";
$glosoli['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of glosoli.
include(glosoli_THEME_PATH);

?>