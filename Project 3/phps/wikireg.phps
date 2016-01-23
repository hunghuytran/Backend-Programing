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
<h2>Edit begrepp<h2/>
<?php 

   // $beg = $_REQUEST['beg'];
    //$bes = $_REQUEST['bes'];
    //$per = $_SESSION['per'];
    //$dat =  date("Y-m-d h:i:s");
    //$kat = $_REQUEST['kat'];
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
$idn = $_REQUEST['id'];
$result = $mysqli->query("SELECT * FROM wiki2015 WHERE id='$idn';");
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
if ($result->num_rows == 0) 
    {
    print("<p>Inga data hittades för sökningen.</p>");
    }
else
    {
    $row = $result->fetch_array();
    $beg = $row['begrepp'];
	    $bes = $row['beskrivning'];
		    $per = $row['person'];
			    $dat = $row['datum'];
				    $kat = $row['kategori'];
    print("<p><form action='wikiregen.php?id=$idn' method='post'>");
    print("Begrepp: <input type='text' name='beg' size='20'><br/>");
    print("Beskrivning<br/><textarea name='bes' rows='4' cols='50'></textarea><br/>");
	print("Författare: <input type='text' name='per' size='10'><br/>");
    print("Kategori: <input type='text' name='kat' size='10'><br/>");
    print("<input type='submit' value='Ändra'>");
    print("</form></p>");    
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