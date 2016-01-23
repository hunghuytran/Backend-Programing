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
<h3>Gästlogg</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/gast.phps">PHPS-filen</a>
<?php
if ((isset($_REQUEST['kommentar'])))
{
$tid = date("H:i:s - j.n.Y");
$nyaste = filter_var($_REQUEST['kommentar'], FILTER_SANITIZE_STRING);
$file = fopen("gast.html","r");
$gastbok = fread($file,"100000");
fclose($file);
$nygastbok = " ".$tid."<p>".$nyaste."</p>".$gastbok;
$file = fopen("gast.html","w");
fwrite($file,$nygastbok,"100000");
fclose($file);
$file = fopen("gast.html","r");
$gastbok = fread($file,"100000");
fclose($file);
print("<h3>Kommentarer</h3>");
print($gastbok);
}
else
{
print("<form action='gast.php' method='get'>");
print("Skriv in feedback: <br/><textarea name='kommentar' rows='4' cols='50'></textarea> <br/>");
print("<input type='submit' value='Skicka'>");
print("</form>");
$file = fopen("gast.html","r");
$gastbok = fread($file,"100000");
fclose($file);
print("<h3>Kommentarer</h3>");
print($gastbok);
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