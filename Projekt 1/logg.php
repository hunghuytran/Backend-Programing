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
<h3>Logg</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/logg.phps">PHPS-filen</a>
<?php
$tid = date("H:i:s - j.n.Y");
$anv = $_SERVER["REMOTE_USER"];
$ip = $_SERVER['REMOTE_ADDR'];
$data = $tid."<br/> ".$anv."<br/>".$ip."<br/>\n";
$file = fopen("logg.txt","a+");
fwrite($file,$data);
fclose($file);
print("<p>Data inskriven:<br/>".$data."</p>");
$file = fopen("antal.txt","r");
$besok = fread($file,"10");
fclose($file);
if ($besok>0)
{
$besok = $besok +1;
$file = fopen("antal.txt","w");
fwrite($file,$besok,"10");
fclose($file);
print("<p>Sidan har nu besökts ".$besok." gånger. Räknaren finns i <a href='antal.txt'>här</a>. Loggen finns <a href='logg.txt'>här</a></p>");
}
else
{
print("<p>Filen var läst!</p>");
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