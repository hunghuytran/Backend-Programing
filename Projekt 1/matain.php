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
if (isset($_REQUEST['prod']))
    {
    //allt inmatat, skicka till databasen
    $prod = $_REQUEST['prod'];
    $besk = $_REQUEST['besk'];
    $pris = $_REQUEST['pris'];
    $antal = $_REQUEST['antal'];
    $fors = $_SESSION['anvandare'];
    $tel = $_SESSION['telefon'];
    $plats = $_REQUEST['plats'];
    $bild = $_REQUEST['bild'];
    $datum = $_SESSION['tidin'];
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("INSERT INTO produkter2015 (produkt,beskrivning,pris,antal,forsaljare,telefon,plats,bild,datum) 
    VALUES ('$prod','$besk','$pris','$antal','$fors','$tel','$plats','$bild','$datum');");
    if ($mysqli->error) {print("<p>Inmatning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($mysqli->affected_rows == 0) 
        {
        print("<p>Inmatning lyckades inte.</p>");
        }
    else
        {
        print("<p>Inmatning gjord. <a href='matain.php'>Mata in flera?</a></p>");
        }
    $mysqli->close();
    }
else
    {
    //skriv ut formulär för inmatning
    print("<p><form action='matain.php' method='post'>");
    print("Produkt: <input type='text' name='prod' size='40'><br/>");
    print("Beskrivning: <input type='text' name='besk' size='60'><br/>");
    print("Pris: <input type='text' name='pris' size='10'><br/>");
    print("Antal: <input type='text' name='antal' size='10'><br/>");
    print("Plats: <input type='text' name='plats' size='20'><br/>");
    print("Bild: <input type='text' name='bild' size='10'><br/>");
    print("<input type='submit' value='Mata in'>");
    print("</form></p>");
    }
}
else
{
print("<p>Du är inte inloggad. Vill du <a href='loggain.php'>logga in</a>?</p>");
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