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
$idn = $_REQUEST['idn'];
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
$result = $mysqli->query("SELECT * FROM tube2015 WHERE id='$idn';");
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
if ($result->num_rows == 0) 
    {
    print("<p>Inga data hittades för sökningen.</p>");
    }
else
    {
    while($row = $result->fetch_array())
      {
    $bildid = $row['id'];
      print("<p><a href='tuberost.php?idn=".$bildid."'><img src='".$row['adress']."' width='100'/></a> ");
      print("<br/>Titel: ".$row['titel']."<br/>");
      print("Beskrivning: ".$row['beskrivning']."<br/>");
      print("Antal: ".$row['visningar']."<br/>");
      print("Betyg: ".$row['vitsord']."");
      print("</p>");
    $visad = $row['visningar'] + 1;
    $result2 = $mysqli->query("UPDATE tube2015 SET visningar='$visad' WHERE id='$bildid';");
    if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($mysqli->affected_rows == 0) 
    {
    print("<p>Inga data hittades för sökningen.</p>");
    }
    else
    {
    print("<p></p>");
      }
    print("<form action='tuberostan.php' method='get'>");
    print("<input type='hidden' name='id' value='".$bildid."'>");    
    print("5:<input name='vitsord' type='radio' value='5'> ");
    print("4:<input name='vitsord' type='radio' value='4'> ");      
    print("3:<input name='vitsord' type='radio' value='3'> ");
    print("2:<input name='vitsord' type='radio' value='2'> ");
    print("1:<input name='vitsord' type='radio' value='1'> ");
    
    print("<input type='submit' value='Rösta'>");
    print("</p>");
    
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