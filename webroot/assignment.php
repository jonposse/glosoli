<?php 
/**
 * This is a glosoli pagecontroller.
 *
 */
// Include the essential config-file which also creates the $glosoli variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the glosoli container.
$glosoli['title'] = "Redovisningar";
 
// <img class='sitelogo' src='' alt='glosoli Logo'/> <br/> temp. removed
$glosoli['header'] = <<<EOD

<span class='sitetitle'>oophp - Jonas Lindholm</span> <br/>
<span class='siteslogan'>Redovisningssida för kursen Databaser och objektorienterad PHP-programmering </span>
EOD;
	

$glosoli['main'] = <<<EOD
	
<div id="textblock">
<h1>Redovisningar</h1>
<h2>Kmom01</h2>
<p>
Jag jobbar i OS X 10.8 och använder MAMP med php 5.3.6 som lokal server. 
Textmate som redigerare och Google Chrome som webbläsare. Transmit som ftp-klient.</p>
<p>
Jag kommer faktiskt inte in på studentservern, användarnamn och lösen funkar inte så jag fick använda en egen server tills vidare.</p>
<p>
Jag har använt mig av diverse videokurser och guider från webben innan denna kurs. Sidan Codecademy.com guidar en igenom grunderna och man kommer vidare genom att skriva sig egen kod enligt uppgifterna. Det mesta här var nytt för mig,  20 stegs guiden jag har igen första halvan. Det blir lite förvirrande när man läst i engelska termer och får övergå till svenska.</p>
<p>
Anax guiden följde jag därför punkt för punkt och fick lite problem mot slutet. Jag får inte Javascript att fungera och är osäker på varför. Det blev mycket felsökande utan att hitta direkta lösningar än så länge, mycket tid gick också på slarv och stavfel som ställde till problem. Mallen får heta Glosoli. Det betyder ungefär; glödande sol, på isländska. Jag har hållit det enkelt och skippat javascript och google analytics så länge.</p>
<p>
Dynamiska menyn från kurssidan fick jag inte att fungera så jag valde en enklare version från webben, förstod inte hur man skal dela upp koden än trots att jag försökte följa källkoden på Mos’ exempelsida. Jag tror att den fungerar som det var tänkt, jag skapade en nav.php för menyn och använde include() i index.tpl.php. </p>
<p>
Jag har lite problem med att styla sidan fortfarande. Det är mycket nytt och jag har nog lite svårt att se helheten än så länge. Jag förstår strukturen till viss del men har inte koll vad all kod i varje gör och hur det fungerar ihop. </p>
<p>
Har skapat en repository på <a href="https://github.com/jonposse/glosoli">Github</a> och installerat lokalt samt laddat upp sidan där. Aldrig använt sidan förut så har kvar att utforska det lite mer. </p>

<p>Testar <a href="dump.php">här</a> om funktionen dump() fungerar </p>

</div>

EOD;
 
$glosoli['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Jonas Lindholm | <a href='https://github.com/jonposse/glosoli'>glosoli på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of glosoli.
include(GLOSOLI_THEME_PATH);
?>


