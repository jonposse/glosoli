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

// navigation
include "nav.php";	

$glosoli['main'] = <<<EOD

<div style="width:600px">

<h1>Redovisningar</h1>
<h2>Kmom01</h2>
<p>
Jag jobbar i OS X 10.8 och använder MAMP med php 5.3.6 som lokal server. 
Textmate som redigerare och Google Chrome som webbläsare.
</p> 
<p>
Jag hittar faktiskt inte vart jag skal ladda upp till studentservern så jag fick använda en egen server tills vidare.
</p>
<p>
Jag har använt mig av diverse videokurser och guider från webben innan denna kurs. Sidan Codecademy.com guidar en igenom grunderna och man kommer vidare genom att skriva sig egen kod enligt uppgifterna. Det mesta här var nytt för mig,  20 stegs guiden jag har igen första halvan. Det blir lite förvirrande när man läst i engelska termer och får övergå till svenska.
Anax guiden följde jag därför punkt för punkt och fick lite problem mot slutet. Jag får inte Javascript att fungera och är osäker på varför. Det blev mycket felsökande utan att hitta direkta lösningar än så länge. Det var inga problem med att inkludera source.php i webroot, likaså funktionen dump av $_SERVER som jag la på en egen sida och länkade från redovisning. Mallen får heta Glosoli. Det betyder ungefär; glödande sol, på isländska. 
</p>
<p>
Dynamiska menyn från kurssidan fick jag inte att fungera så jag valde en enklare version från webben. Jag tror att den fungerar som det var tänkt, jag skapade en nav.php för menyn och använde include(), så långt fungerar det,  dock så kan jag inte styla den med css filen.  Inkluderar jag config.php i nav.php så fungerar inga sidor som menyn ligger på. Jag ville helst ha menyn under sitetitle på sidan men det har jag inte lyckats lösa än.
</p>
<p>
Stilmallen, style.css fungerar inte med resten av sidan heller. Hittar ingen lösning här så det blev en del problem som jag måste jobba vidare på. Fick använda lokal stilning på div taggen för att det skal bli läsbart så länge. Jag har nog lite svårt att se helheten än så länge. Jag förstår strukturen till viss del men jag vet inte exakt vad all kod i varje gör och hur det fungerar ihop. 
</p>
<p>
Har skapat en repository på <a href="https://github.com/jonposse/glosoli">Github</a> och installerat lokalt samt laddat upp sidan där. Aldrig använt sidan förut så har kvar att utforska det lite mer.
</p>

<p>Testar <a href="dump.php">här</a> om funktionen dump() fungerar </p>

</div> <!-- container -->

EOD;
 
$glosoli['footer'] = <<<EOD
<hr>
<footer><span class='sitefooter'>Copyright (c) Jonas Lindholm | <a href='https://github.com/jonposse/glosoli'>glosoli på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of glosoli.
include(glosoli_THEME_PATH);
?>


