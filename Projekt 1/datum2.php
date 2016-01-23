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
<h3>Datum jämförelse</h3>
<br/>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/datum2.phps">PHPS-filen</a>
<?php
$now = time();

print("<p>Inslagen datum " .$_REQUEST['dd'].".".$_REQUEST['mm'].".".$_REQUEST['aaaa']."</p>");
$day = $_REQUEST['dd'];
$mon = $_REQUEST['mm'];
$year = $_REQUEST['aaaa'];
$timenow = mktime(0,0,0,$mon,$day,$year);
$differ = $now - $timenow;
print("<p>Skillnaden mellan dagens datum och insättningsdatum i sekunder är: " .abs(floor($differ))." s.</p>");
print("<p>Skillnad i dygn: ".abs(floor($differ/(3600*24)))." dygn.</p>");
print("<p>Skillnad i timmar: ".abs(floor($differ/(3600)))."h.</p>");
print("<p>Skillnad i minuter: ".abs(floor($differ/(60)))." minuter.</p>");
	if ($differ < 0) {
print("<p>Tiden är i framtiden</p>");
}	else {
print("<p>Tiden är i förflutna</p>");
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