<?php 
/**
 * This is a glosoli pagecontroller.
 *
 */
// Include the essential config-file which also creates the $glosoli variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the glosoli container.
$glosoli['title'] = "Hello World";
 
$glosoli['header'] = <<<EOD
<img class='sitelogo' src='img/glosoli.png' alt='glosoli Logo'/>
<span class='sitetitle'>glosoli webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$glosoli['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur glosoli ser ut och fungerar.</p>
EOD;
 
$glosoli['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Jonas Lindholm | <a href='https://github.com/jonposse/glosoli'>glosoli på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of glosoli.
include(glosoli_THEME_PATH);
?>