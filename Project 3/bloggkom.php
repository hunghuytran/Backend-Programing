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
<h3>Bloggkommentar</h3><br/>

<?php
	$bid = $_GET['haveit'];
if (isset($_REQUEST['person']))
    {

    //allt inmatat, skicka till databasen
		$person = $_REQUEST['person'];
		$text = $_REQUEST['text'];
    $datum = date("Y-m-d h:i:s");
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("INSERT INTO bloggkommentar2015 (idn, Person, Text, Datum) 
    VALUES ('$bid','$person','$text','$datum');");
    if ($mysqli->error) {print("<p>FAIL INMATNING AV INLÄGG!<br/>Fel: ".$mysqli->error."</p>");}
    if ($mysqli->affected_rows == 0) 
        {
        print("<p>Kommentar misslyckades. Kontrollera special tecken!</p>");
        }
    else
        {
        print("<p>Kommentar gjord.</p>");
        }
    $mysqli->close();
    }
else
    {
    //skriv ut formulär för inmatning
    print("<p><form action='bloggkom.php' method='get'>");
    print("Person:<br/> <input type='text' name='person' size='20'><br/>");
    print("<textarea name='text' rows='4' cols='50'></textarea><br/>");
    print("<input type='hidden' name='haveit' value='".$bid."'>");
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