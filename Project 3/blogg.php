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
<h3>Blogg</h3>
<p><a href='bloggin.php'>Skriv ett blogg inlägg </a></p><br/>
<?php
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
$result = $mysqli->query("SELECT * FROM blogginlägg2015 ORDER BY datum DESC;");
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
if ($result->num_rows == 0) 
    {
    print("<p>Ingen inlägg här.</p>");
    }
else
    {
    while($row = $result->fetch_array())
      {
    print("<h2>".$row['Rubrik']."</h2>");
	print("<p>Publicerad av ".$row['Bloggare']." - ".$row['Datum']."</p>");
    print("<p>".$row['Text']."</p>");
    print("<p>Kategori: ".$row['Kategori']."</p>");
    print("<p>".$row['Taggar']."</p>");
    print("<p>".$row['Bild']."</p><br/>");
    $bloggidn = $row['id'];
	$result2 = $mysqli->query("SELECT * FROM bloggkommentar2015 WHERE idn='$bloggidn' ORDER BY datum DESC;");
	if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
	if ($result2->num_rows == 0) 
    {
    print('<a href="bloggkom.php?haveit='.$bloggidn.'">Kommentera</a>'); 
    }
	else
    {
    while($row2 = $result2->fetch_array())
      {
	print("<section><h4>Kommentar av ".$row2['Person']." - ".$row2['Datum']."</h4>");
    print("<p>".$row2['Text']."</p></section>");
      }
	print('<a href="bloggkom.php?haveit='.$bloggidn.'">Kommentera</a>'); 
    }
      }
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