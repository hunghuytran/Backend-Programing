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
<h3>Information om system.</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/system.phps">System phps</a>
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
print("Användare: ".$hostname." .</p>");
print("IP-address: ".$_SERVER['REMOTE_ADDR']." .</p>");
print("Apache-version och PHP-version: ".$_SERVER['SERVER_SOFTWARE'].".</p>");
print("Server namn: ".$_SERVER['SERVER_NAME'].".</p>");
print("Server IP-address: ".$_SERVER['SERVER_ADDR'].".</p>");
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