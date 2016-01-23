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
<h3>Feedback</h3>

<?php
if (!isset($_REQUEST['question']))
{
    print("<h2>Från skala ett till fem(Super).</h2>");
    print("<form action='feedback.php' method='get'>
            <p>1. Hur känner du dig idag?: <br/>
            <input type='radio' name='que1' value='1' />1 
            <input type='radio' name='que1' value='2' />2 
            <input type='radio' name='que1' value='3' />3 
            <input type='radio' name='que1' value='4' />4 
            <input type='radio' name='que1' value='5' />5</p>
			<p>1. Hur är livet?: <br/>
            <input type='radio' name='que2' value='1' />1 
            <input type='radio' name='que2' value='2' />2 
            <input type='radio' name='que2' value='3' />3 
            <input type='radio' name='que2' value='4' />4 
            <input type='radio' name='que2' value='5' />5</p>
			<p>1. Kommunicera du mycket?: <br/>
            <input type='radio' name='que3' value='1' />1 
            <input type='radio' name='que3' value='2' />2 
            <input type='radio' name='que3' value='3' />3 
            <input type='radio' name='que3' value='4' />4 
            <input type='radio' name='que3' value='5' />5</p>
			<p>1. Tycker du om att äta?: <br/>
            <input type='radio' name='que4' value='1' />1 
            <input type='radio' name='que4' value='2' />2 
            <input type='radio' name='que4' value='3' />3 
            <input type='radio' name='que4' value='4' />4 
            <input type='radio' name='que4' value='5' />5</p>
			<p>1. Har du det tråkig??: <br/>
            <input type='radio' name='que5' value='1' />1 
            <input type='radio' name='que5' value='2' />2 
            <input type='radio' name='que5' value='3' />3 
            <input type='radio' name='que5' value='4' />4 
            <input type='radio' name='que5' value='5' />5</p>
            <p><input type='submit' name='question' value='Skicka' /></p></form>");
}
else
{
    print("<p>Tack för hjälpen.</p>");
    $f1 = $_REQUEST['que1'];
	    $f2 = $_REQUEST['que2'];
		    $f3 = $_REQUEST['que3'];
			    $f4 = $_REQUEST['que4'];
				    $f5 = $_REQUEST['que5'];
    
    
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("SELECT * FROM feedback2015 WHERE id=1 ;");
    if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($result->num_rows == 0) 
    {
    print("<p>Inga data hittades för sökningen.</p>");
    }
    else
    {    
    while($row = $result->fetch_array())
    {
    $antal = $row['svar'];
    $summaf1 = $antal * $row['mf1'];
	    $summaf2 = $antal * $row['mf2'];
		    $summaf3 = $antal * $row['mf3'];
			    $summaf4 = $antal * $row['mf4'];
				    $summaf5 = $antal * $row['mf5'];
    $antal = $antal + 1;
    $nysummaf1 = $summaf1 + $f1;
	  $nysummaf2 = $summaf2 + $f2;
	    $nysummaf3 = $summaf3 + $f3;
		  $nysummaf4 = $summaf4 + $f4;
		    $nysummaf5 = $summaf5 + $f5;
    $mf1 = $nysummaf1/$antal;
	    $mf2 = $nysummaf2/$antal;
		    $mf3 = $nysummaf3/$antal;
			    $mf4 = $nysummaf4/$antal;
				    $mf5 = $nysummaf5/$antal;
    }        
    $result = $mysqli->query("UPDATE feedback2015
    SET svar=$antal, mf1=$mf1, mf2=$mf2, mf3=$mf3, mf4=$mf4, mf5=$mf5    
    WHERE id=1;");
    print("<p>Medeltal för varje fråga enskild");
    print("<br/><p>F1. $mf1</p>");
	    print("<br/><p>F2. $mf2</p>");
		    print("<br/><p>F3. $mf3</p>");
			    print("<br/><p>F4. $mf4</p>");
				    print("<br/><p>F5. $mf5</p>");
					    print("<br/><p>Antalet svar given: $antal</p>");
    }
}
?>
<section>
</section>
</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright hung.tran@arcada.fi</td><td></td><td>17.2.2015</td></tr></table></footer>
</div>


</body>

</html>