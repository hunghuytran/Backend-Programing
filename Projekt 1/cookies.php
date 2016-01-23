<?php
$cookie_value = date("H:i:s , j.n.Y");
setcookie("besokt",  $_COOKIE['besokt'], time() + (86400 * 30), "/");
setcookie("visit", $_COOKIE['visit'] + 1, time() + (3600 * 24 * 30), "/")
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
<h3>Cookies</h3>
<br/>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/cookies.phps">PHPS-filen</a>
<?php
if(!isset($_COOKIE['mycookie'])) 
    {
    print("<p>Du har inte varit här tidigare.<form action='cookie2.php' method='get'><input type='hidden' name='namn' value='mycookie'><input type='submit' value='Sätt'></form>");
    } 
    else 
    { 
    print("<p>Värdet på cookien är: ".$_COOKIE['mycookie']."</p>");
    print("<p>Det har besökt ".$_COOKIE['visit']." gånger.</p>");
    print("<p>Första gången var:".$_COOKIE['besokt']."</p>");
    print("<p>Ta bort cookies här. <form action='cookie3.php' method='get'><input type='hidden' name='namn' value='mycookie'><input type='submit' value='Töm'></form>");
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