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
<h3>Tid och datum</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/tid.phps">PHPSTID</a>
<?php
$weekdays = array("Söndag","Måndag","Tisdag","Onsdag","Torsdag","Fredag","Lördag");
$month = array(" ", "Januari","Februari","Mars","April","May","Juni","Juli","Augusti","September","Oktober","November","December");
$weekday = $weekdays[date('w')];
$themonth = $month[date('n')];

	print("<p>" .date('H:i:s - j.n.y').".</p>");
	print("<p>Dag och månad: ".$weekday." och ".$themonth.".</p>");
	print("<p>Veckonummer: " .date('W'). ".</p>");
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