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
<tr><td><h1>PROJECT2</h1></td></tr>
<tr><td><h4>PHP&SQL</h4></td></tr>
</table>
</header>
<nav>
<ul>
    <li><a href="start.php">start</a></li>
    <li><a href="reg.php">reg</a></li>
    <li><a href="loggain.php">loggain</a></li>
    <li><a href="listaut.php">listaut</a></li>
    <li><a href="matain.php">matain</a></li>
    <li><a href="andra.php">ändra</a></li>
    <li><a href="radera.php">radera</a></li>
    <li><a href="sok.php">sök</a></li>
    <li><a href="admin.php">admin</a></li>
    <li><a href="rapport.php">rapport</a></li>
</ul>
</nav>
<div id="innehall">
<article>
<h3>Rapport</h3>
<?php
print("<p>Andra projektet handlade om att kunna använda och modifiera SQL databas samt kombinera det tillsammans med PHP. Det tog inte hemskt länge för mig att lära detta för jag var ganska bekant med SQL från tidigare. Jag la inte tillräcklig mycket tid åt att göra detta projekt, men det verkar fungera helt okej. Sammanlagt la jag 7 timmar på arbetet.<br/>
1. Uppgiften går upp på att planera vad för typ databas man ville ha. Jag valde att ha book publikations sida. Inget desto vidare bra ide men helt okej.<br/>
2. Här byggde vi tillsammans med föreläsaren en databas med tabell. Det enda jag gjorde var ändringar i tabellen.<br/>
3. För att ha tillkomst till vissa delar av sidor behöver man en login. Jag gjorde en register som registerar användare till databasen. Genom att använda INSERT INTO kan man lägga nya värden i den önskade tabellen. <br/>
4. Sessionshanteringen sker när man logga in. Om man inte är inloggad kan man inte mata in/radera/ändra böcker. <br/>
5.Relevanta informationen listas ut på listaut sidan. Där kommer alla böcker som har matas in av alla användare. Jag fixade aldrig sorteringen för jag hade inte hemskt mycket tid. <br/>
6. I matain sidan kan man lägga in nya informationer. Genom att använda mig av INSERT INTO, kan användaren lägga in ny information på boklistan <br/>
7. UPDATE funktionen hjälpte att göra ändringar i sql tabellen.<br/>
8. Uppgiften gick ut på att ge tillkomst åt administratorn att kunna ändra och radera på saker i sql tabellerna. <br/>
9. Sökmotorn söker upp i sql om det existerar något liknande med sökordet.</p> <br/>
10. På grund av tidsbrist hann jag inte lägga så mycket tid på denna projekt. Detta projekt krävdes lite mer tid än förväntat.");
?>
<section>
</section>
</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright 2015</td><td>Admin hung.tran@arcada.fi</td><td>29.1.2015</td></tr></table></footer></div>


</body>

</html>