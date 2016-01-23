<?php
session_start();
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<title>BE2015</title>
<link type="text/css" rel="stylesheet" href="stil.css" />
</head>

<body>
<div id="sidan">
<header>
<table>
<tr><td><h1>Projekt 3</h1></td></tr>
<tr><td><h4>Advanced PHPAJAX</h4></td></tr>
</table>
</header>
<nav>
<ul>
    <li><a href="start.php">start</a></li>
    <li><a href="poll.php">poll</a></li>
    <li><a href="feedback.php">feedback</a></li>
    <li><a href="ajaxsok.php">ajaxsok</a></li>
    <li><a href="foresla.php">föreslå</a></li>
    <li><a href="ajaxxml.php">ajaxxml</a></li>
    <li><a href="blogg.php">blogg</a></li>
    <li><a href="wiki.php">wiki</a></li>
    <li><a href="tube.php">tube</a></li>
    <li><a href="butik.php">butik</a></li>
</ul>
</nav>
<div id="innehall">
<article>
<h2>Rapport</h2>
<p>1. Uppgiften genomfördes med hjälp av AJAX och PHP kombinerad med varandra. Jag hittade information hur man gjorde en frågeformulär på w3schools.com. Skripten hämtar en respons från en annan php fil som sedan sätter in resultaten i en txt fil(poll_result.txt). Jag valde att använda AJAX istället för SQL för det var enklare.<br/>
2. I denna uppgift skulle man göra en feedback form som skickar till databas server. Genom användning av SQL kunde vi lagra värde som blev insatta genom PHP formen på sidan. Därefter samlade all data upp som sedan kunde utnyttjas för att räkna ut medeltalet på varje enskild fråga. Det blev ingen svårt problem förrutom felkoder under uppgiftens gång.<br/>
3. För att kunna göra en sökfunktion med hjälp av PHP/AJAX använde jag mig av liknande skript som på frågeformulär uppgiften(1). Det var ganska enkelt att göra för det är en kombination av en uppgift i projekt 2 också.<br/>
4. Uppgiften gick ut på att göra en PHP/AJAX Skript som visar föreslag som finns i SQL-databasen. Det var lätt att fixa uppgiften. Första skripten söker upp andra skripten som utförs.<br/>
5. Här använde jag mig av AJAX och PHP för att visa nyhetsflöde på min sida. Detta gjordes genom att skripten hämtar upp rss.fil genom getrss.php, som visar innehållet på rss. Vi gjorde något liknande på javaskript kursen så det var ingen desto vidare svårt.<br/>
6. Det första som vi gjorde var att bygga en tabell för blogg inlägg och kommentarer. Därefter använde vi av en skript från förra projektets uppgift som hämtar upp information från SQL-databas. Jag kopierade en liten bit av projekt 2, där vi skulle mata in saker och gjorde ändringar. Därefter använde jag mig av GET funktion för att hämta idvalue på bloggid för att veta var kommentarerna skulle vara. Det var ganska svårt att fixa detta för jag stötte på problem när jag skulle hämta value från URL. <br/>
7. Uppgiften är lik 6. Den gick ut på att ha en sökmotor som kunde söka upp poster eller begrepp från en databas. Jag importerade först databasen från filen wiki2014, därefter editerade jag innehållet. Skripten för ändringar tog jag från projekt 2 där man skulle göra ändringar, inga krångligheter med detta. Efter att fixat allting förrutom kommentaren, tog jag skript från bloggsidan och justerade lite så det passade min smak.<br/>
8. Denna uppgiften tog riktig länge, den var typ en mix av 3 uppgifter från projekt 2 och 3. Det första som jag gjorde var att fixa betyginsättningen och medeltal uträkningen. Detta gjordes med hjälp av insättning av värde i SQL tabell. Därefter fixade jag uppladdningen av bilden och dess titel, beskrivning osv.<br/>
9. Uppgiften gick ut på att göra en liten butik där man kan lägga till varu i varukorg. Detta görs med hjälp av SQL, där man lägger item in i en annan databas-tabell innanför SQL. Instruktioner om beställningsdelen var lite rådig som jag gjorde bara en radera sida som tar bort all item från varukorg. Om meningen att varorna skulle skickas, måste man först fixa en skript som skickar till adress och sedan radera varukorgen därefter.<br/>
Sammanlagt tog projektet över 20 timmars hemarbete för jag missade föreläsningar på grund av andra förorsaker. Under projektets gång lärde jag mig bättre om syntax i PHP och SQL. Därmed också användning av if satser. En stor del av skripterna kopierades från johnny och därefter modifierade jag till min behov. Jag lärde mig mer under denna kursen än på javaskripten för jag satte mer tid denna gången på projekterna.
<section>
</section>
</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright hung.tran@arcada.fi</td><td></td><td>17.2.2015</td></tr></table></footer>
</div>


</body>

</html>