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
<tr><td><h1>PROJECT2</h1></td></tr>
<tr><td><h4>PHP&SQL</h4></td></tr>
</table>
</header>
<nav>
<ul>
    <li><a href="start.php">start</a></li>
    <li><a href="reg.php">reg</a></li>
    <li><a href="loggain.php">loggain</a></li>
    <li><a href="listaut.php">listaut</a></li>
    <li><a href="matain.php">matain</a></li>
    <li><a href="andra.php">ändra</a></li>
    <li><a href="radera.php">radera</a></li>
    <li><a href="sok.php">sök</a></li>
    <li><a href="admin.php">admin</a></li>
    <li><a href="rapport.php">rapport</a></li>
</ul>
</nav>
<div id="innehall">
<article>
<h3>Lopptorget.</h3>
<p>Registrering.</p>
<?php
if ((isset($_SESSION['user'])))
{
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
$idn = $_REQUEST['id'];
$tabell = $_REQUEST['tabell'];
$result = $mysqli->query("DELETE FROM $tabell WHERE id='$idn';");
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
print("<p>Raden togs bort. Nu finns följande rader kvar.</p>");
if ($tabell=="produkter2015")
{
    $anv = $_SESSION['user'];
    $result = $mysqli->query("SELECT * FROM $tabell WHERE forsaljare='$anv';");
    if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($result->num_rows == 0) 
    {
    print("<p>Inga data hittades för sökningen.</p>");
    }
    else
    {
    print("<style>table {border: 0px solid;} th {text-align: left;} td {border: 0px solid;} </style>");
    print("<table><tr> <th>produkt</th><th>beskrivning</th><th>pris</th><th>antal</th><th>plats</th><th>bild</th><th>datum</th> <tr>");
    while($row = $result->fetch_array())
      {
      print("<tr>");
      print("<td>".$row['produkt']."</td>");
      print("<td>".$row['beskrivning']."</td>");
      print("<td>".$row['pris']."</td>");
      print("<td>".$row['antal']."</td>");
    print("<td>".$row['plats']."</td>");
    print("<td>".$row['bild']."</td>");
    print("<td>".$row['datum']."</td>");
    $idn = $row['id'];
    print("<td><form action='raderapost.php?id=$idn&tabell=$tabell' method='post'><input type ='submit' value='radera'/></form></td>");
      print("</tr>");
      }
    print("</table>"); 
    }
$mysqli->close();
}
}
else
{
print("<p>Du måste vara inloggad för att kunna radera produkter</p>");
}
?>
<section>
</section>
</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright 2015</td><td>Admin hung.tran@arcada.fi</td><td>29.1.2015</td></tr></table></footer></div>


</body>

</html>