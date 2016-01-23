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
<h3>Beginners PHP wikipedia</h3><br/>

<form name="sok" method="get" action="wiki.php"> 
<h2>Sökfunktion</h2>
<input name="sokord" type="text" size="20" /> 
<input name="sok" type="submit" value="Sök" /> 
<br/><a href="wikin.php">Definiera ett nytt begrepp</a> 

<?php 
if (isset($_REQUEST['id'])){$idt=$_REQUEST['id'];} 
else {$idt=3;} 
include('dbaccess.php'); 
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname); 
$mysqli->set_charset("utf8"); 
if (mysqli_connect_errno()) 
{ 
echo "Lyckades inte koppla mig till MySQL-servern: " . mysqli_connect_error(); 
} 
if (isset($_REQUEST['sokord']))  
{ 
$result = $mysqli->query("SELECT * FROM wiki2015 WHERE begrepp LIKE '%".$_REQUEST['sokord']."%' OR beskrivning LIKE '%".$_REQUEST['sokord']."%'");
} 
else 
{ 
$result = $mysqli->query("SELECT * FROM wiki2015 WHERE id='$idt'"); 
} 
while($row = $result->fetch_array()) 
  { 
  $idn = $row["id"]; 
  $begreppn = $row["begrepp"]; 
  $beskrivningn = $row["beskrivning"]; 
  $diskussionn = $row["diskussion"]; 
  $personn = $row["person"]; 
  $datumn = $row["datum"]; 
  $kategorin = $row["kategori"]; 
   print('<p><h3> '.$begreppn.'</h3><p>Beskrivning: <br/> '.$beskrivningn.'</p> <p>Tillagd '.$datumn.' av '.$personn.' <br/>Kategori: '.$kategorin.'</p>'); 
  $result2 = $mysqli->query("SELECT * FROM wikikommentar2015 WHERE idn='$idn' ORDER BY datum DESC;");
	if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
	if ($result2->num_rows == 0) 
    {
	print('<p><a href="wikidis.php?haveit='.$idn.'">Kommentera </a><p/>'); 
	print('<p><a href="wikireg.php?id='.$idn.'">Redigera</a><p/>'); 
    }
	else
    {
    while($row2 = $result2->fetch_array())
      {
	print("<section><h4>Kommentar av ".$row2['Person']." - ".$row2['Datum']."</h4>");
    print("<p>".$row2['Text']."</p></section>");
      }
	print('<p><a href="wikidis.php?haveit='.$idn.'">Kommentera </a><p/>'); 
	print('<p><a href="wikireg.php?id='.$idn.'">Redigera</a><p/>'); 
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