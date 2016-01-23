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
<h3>Butik</h3>
<h3>Varuköp</h3>
<?php
$varuid = $_REQUEST['varuidn'];
$prodnamn = $_REQUEST['pnamn'];
$pris = $_REQUEST['ppris'];
$bestallare = $_SESSION['bestallare'];    
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
$result = $mysqli->query("INSERT INTO varukorg2015 (bestallare, produkt, pris, antal, summa)
VALUES ('$bestallare', '$prodnamn', '$pris', '1', '$pris');");
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
if ($mysqli->affected_rows == 0) 
    {
    print("<p>Inga data hittades för sökningen.</p>");
    }
else
    {
    print("<p>Produkten lagd i varukorgen.</p>");
    print("<p>Vill du shoppa <a href='butik.php'>mera</a>?</p>");
    print("<p>Gå till <a href='butikkorg.php'>varukorgen</a>.</p>");
    }
$mysqli->close();
?>
<br>

</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright hung.tran@arcada.fi</td><td></td><td>17.2.2015</td></tr></table></footer>
</div>


</body>

</html>