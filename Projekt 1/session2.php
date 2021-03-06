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
<h3>Session avdelningen</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/session2.phps">PHPS-session2</a>
<?php
if ((isset($_SESSION['anvandare'])))
    {
    print("<p>Välkomen ".$_SESSION['anvandare']."!<br/>");
    print("<p>Besök första gången:".$_SESSION['tidin']."</p>");
    print("<p>Testa om inloggningen fungerar <a href='session2.php'>här</a>!</p>");
    print("<p><a href='session3.php'>Logga ut</a></p>");        
    }
    else
    {
    print("<p>Du Ãr inte inloggad!</p>");
    print("<p>Tryck <a href='session.php'>här</a> för att komma till inloggningssidan!</p>");
    }
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