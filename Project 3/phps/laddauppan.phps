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
<h3>Fotoarkiv</h3>
<?php
	$adr = $_GET['adress'];
if (isset($_REQUEST['tit']))
    {
	$tit = $_REQUEST['tit'];
	$bes = $_REQUEST['bes'];
	$upl = $_REQUEST['upl'];
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("INSERT INTO tube2015 ( titel, beskrivning, adress, uppladdare) 
    VALUES ('$tit', '$bes', '$adr', 
	'$upl');");
    if ($mysqli->error) {print("<p>Inmatning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($mysqli->affected_rows == 0) 
        {
        print("<p>Inmatning lyckades inte.</p>");
        }
    else
        {
		}
    $mysqli->close();
    }
	else
    {
    //skriv ut formulär för inmatning
    print("<p><form action='laddauppan.php' method='get'>");
    print("Titel: <br/><input type='text' name='tit' size='20'><br/>");
	print("Uppladdare: <br/><input type='text' name='upl' size='20'><br/>");
	print("<input type='hidden' name='adress' value='".$adr."'>");
    print("Beskrivning: <br/> <textarea name='bes' rows='4' cols='50'></textarea><br/>");
    print("<input type='submit' value='Lägg upp'>");
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