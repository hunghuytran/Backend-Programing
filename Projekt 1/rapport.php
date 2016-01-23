<?php
session_start();
?>
<!DOCTYPE html >
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<title>Back-end programmering</title>
<link type="text/css" rel="stylesheet" href="stil.css" />
</head>

<body>
<div id="sidan">
<header>
<table>
<tr><td><h1>P1</h1></td></tr>
<tr><td><h4>- Grundläggande PHP -</h4></td></tr>
</table>
</header>
<nav>
<ul>
    <li><a href="system.php">system</a></li>
    <li><a href="tid.php">tid</a></li>
    <li><a href="datum.php">datum</a></li>
    <li><a href="epost.php">epost</a></li>
    <li><a href="cookies.php">cookies</a></li>
    <li><a href="session.php">session</a></li>
    <li><a href="filer.php">filer</a></li>
    <li><a href="logg.php">logg</a></li>
    <li><a href="gast.php">gast</a></li>
    <li><a href="rapport.php">rapport</a></li>
</ul>
</nav>
<div id="innehall">
<article>
<h3>Rapport för projekt 1</h3>
<?php
 echo "Projekt nummer ett för grundläggande php språk tog cirka 10 timmar. Under projektets gång lärde jag att förstå syntaxen bättre. Php var ganska likt javascript, men måste köras genom en servern. Jag har också lärt mig att vissa funktionalitet i php fungerar på samma sätt som javascript också, vilket gör att det är enklare att förstå. Tidskrav på en uppgift tog cirka 1 timme och jag la inte hemskt mycket tid på koddesign. Google underlättade också projektet. <br/>
 1. Jag letade först fram information om hur man framställde information med hjälp av php. Informationen fick jag från w3schools som visade koderna som behövdes för att slutföra uppgiften. <br/>
 2. I denna uppgift letade jag fram ett bra sätt att göra array skript på enklaste sätt. Det svåraste var att översätta månader och dagar till svenska, men som tur fanns också information om utförande i PHP-date på w3schools. <br/>
 3. Jag lyckades inte med kontrolleringen av inmatning i denna uppgift. Det var för svårt att skriva en kod som kontrollera att inmatning var års, månad och dag nummer inom en viss ram. På grund av att jag inte hade mycket tid, hann jag inte fixa detta. Lösningen till detta tror jag kan ha varit att använda !pregmatch. Allt annat lyckades jag med. <br/>
 4. Genom användning av validation(kontrollerings koder) kunde man begränsa användningen av andra onödiga tecken. Jag la till if sats i början av skripten för att kontrollera om email eller användare innehåll sådana karaktärer. <br/>
 5. Här satte jag en cookie på en annan sida som registera antalet besök och första tidpunkten då cookien sätts. Sedan adderas 1 besök för varje gång man besöker cookien webbsidan på nytt. Töm cookies gjordes under föreläsningen. <br/>
 6. Sessions sidorna var redan gjorde under föreläsningen. För att klara av uppgiften krävdes det att göra en if sats som kontrollerar att användarnamn och lösenord är rätt. <br/>
 7. Filera kunde laddas upp på servern genom att först göra en formulär i php som öppnar filväljningen. Därefter krävdes det att man länkande ihop php sidans formulär med en annan php sida som laddar upp dom filerna som man har valt. I den nya php sidan kunde man sedan ändra vilka filer som accepteras. För att visa vilka filer som har laddats upp använde jag mig av opendir och readdir som läser innehåll av en katalog. <br/>
 8. För att loggen skulle fungerar krävdes det tillåtelse att ändra en txt fil. Med hjälp av fopen kunde vi öppna en .txt fil från php. Fwrite skriver in och fclose stänger. <br/>
 9. I gästloggen gjorde jag en html sida som lagrar all information istället. Fwrite, fopen, fclose användes också i denna uppgift.
 ";
 
?>
</section>
<section>
</section>
<section>
</section>
</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright,2015</td><td>hung.tran@arcada.fi</td><td>20.1.2015</td></tr></table></footer>
</div>


</body>

</html>