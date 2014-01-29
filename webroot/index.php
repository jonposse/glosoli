<?php 
/**
 * This is a glosoli pagecontroller.
 *
 */
// Include the essential config-file which also creates the $glosoli variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the glosoli container.
$glosoli['title'] = "Hello World";
 
// <img class='sitelogo' src='' alt='glosoli Logo'/> <br/>
$glosoli['header'] = <<<EOD

<span class='sitetitle'>oophp - Jonas Lindholm</span> <br/>
<span class='siteslogan'>Redovisningssida för kursen Databaser och objektorienterad PHP-programmering </span>
EOD;

include "nav.php";	

$glosoli['main'] = <<<EOD

<div style="width:600px">
<h1>Om mig</h1>
	<p>
		Jag heter Jonas Lindhom. Jag läser sista året som Interaktionsdesigner i Kalmar. Interaktionsdesign handlar främst att utveckla produkter och tjänster med fokus på användarupplevelsen. Det blir ganska brett och tyvärr lite ytligt ibland så det blir mycket självstudier för att komplettera sånt som är intressant.
	</p>
	<p>
		Jag började tidigt med datorer, främst till musik. Jag spelade flera instrument, skapade musik och pluggade till ljudtekniker. Nu handlar det mer om grafisk design, layout, bildbehandling och lite kodning. Jag har byggt en del sidor i html/css med javascript. Det blev en del Wordpress och det vill jag gärna vill undvika framöver. Har inte så mycket erfarenhet av php men började i slutet av förra året att prova olika tutorials och guider på nätet.
	</p>
	
<img src="img/jag.jpg" id="jag" alt="bild på mig">

</div> <!-- container -->

EOD;
 
$glosoli['footer'] = <<<EOD
	<hr>
<footer><span class='sitefooter'>Copyright (c) Jonas Lindholm | <a href='https://github.com/jonposse/glosoli'>glosoli på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of glosoli.
include(glosoli_THEME_PATH);
?>


