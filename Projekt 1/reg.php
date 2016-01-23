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
<h3>Register</h3>
<?php

if ((isset($_REQUEST['anv']))&&(isset($_REQUEST['losen'])))
    {
    //allt inmatat, skicka till databasen
    $anv = $_REQUEST['anv'];
    $losen = hash('sha256',$_REQUEST['losen']);
    $epost = $_REQUEST['epost'];
    $regdat = date("Y-n-j");
    $sendat = date("Y-n-j");
    $roll = "Gäst";
    $status = "Ok";
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
// kolla om användaren redan finns    
    $result = $mysqli->query("SELECT * FROM anvandare2015 WHERE user='$anv';");
    if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($result->num_rows == 0) 
        {
        $result = $mysqli->query("INSERT INTO anvandare2015 (user,password,email,registered,last,role,status) 
        VALUES ('$anv','$losen','$epost','$regdat','$sendat','$roll','$status');");
        if ($mysqli->error) {print("<p>Error in registration<br/>Error: ".$mysqli->error."</p>");}
        if ($mysqli->affected_rows == 0) 
            {
            print("<p>Registration fail.</p>");
            }
        else
            {
            print("<p>Registration success.<a href='loggain.php'>Log in</a></p>");
            }
        }
        else
        {
        print("<p>Username already exist!</p>");
        // Ge ett formulär med ifylld användardata
        print("<p><a href='reg.php'>Try again.</a></p>");
        }
    $mysqli->close();
    }
else
    {
    //skriv ut formulär för registrering
    print("<p>Alla fält är obligatoriska.</p>");
    print("<p><form action='reg.php' method='post'>");
    print("Username: <input type='text' name='anv' size='60'><br/>");
    print("Password: <br/><input type='password' name='losen' size='40'><br/>");
    print("Email: <input type='text' name='epost' size='60'><br/>");
    print("<input type='submit' value='Register'>");
    print("</form></p>");
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