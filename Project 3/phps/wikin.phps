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
<h2>Definering av begrepp<h2/>
<?php
if (isset($_REQUEST['beg']))
    {
    //allt inmatat, skicka till databasen
	$begrepp = $_REQUEST['beg'];
    $datum = date("Y-m-d h:i:s");
    $beskriv = $_REQUEST['bes'];
    $person = $_REQUEST['per'];
    $kat = $_REQUEST['kat'];
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("INSERT INTO wiki2015 ( begrepp, beskrivning , person, datum, kategori) 
    VALUES ('$begrepp','$beskriv','$person','$datum','$kat');");
    if ($mysqli->error) {print("<p>FAIL INMATNING AV INLÄGG!<br/>Fel: ".$mysqli->error."</p>");}
    if ($mysqli->affected_rows == 0) 
        {
        print("<p>Begrepp inmatning misslyckades. Kontrollera special tecken!</p>");
        }
    else
        {
        print("<p>Vill du <a href='wikin.php'>lägga till ännu en?</a></p>");
        }
    $mysqli->close();
    }
else
    {
    //skriv ut formulär för inmatning
    print("<p><form action='wikin.php' method='post'>");
    print("Begrepp: <input type='text' name='beg' size='20'><br/>");
    print("Beskrivning<br/><textarea name='bes' rows='4' cols='50'></textarea><br/>");
	print("Författare: <input type='text' name='per' size='10'><br/>");
    print("Kategori: <input type='text' name='kat' size='10'><br/>");
    print("<input type='submit' value='Lägg in'>");
    print("</form></p>");
    }
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