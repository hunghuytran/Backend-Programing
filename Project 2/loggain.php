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
<h3>Log in</h3>
<?php
if ((isset($_SESSION['user'])))
{
print("<p>You're logged in. <a href='loggaut.php'>Log out</a></p>");
}
else
{
if (isset($_REQUEST['user'])&&isset($_REQUEST['password']))
    {
    $anv = $_REQUEST['user'];
    $los = hash('sha256',$_REQUEST['password']);
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("SELECT * FROM anvandare2015 WHERE user='$anv';");
    if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($result->num_rows == 0) 
        {
        print("<p>You're not registered!</p>");
        }
    else
        {
        $row = $result->fetch_array();
        if ($row['password']==$los)
            {
            print("<p>Everything is correct, session start!</p>");
            $_SESSION['user']= $_REQUEST['user'];
            $_SESSION['date']= date("Y-n-j");			
            $_SESSION['role']= $row['role'];
            }
        else
            {
            print("<p>Wrong password</p>");            
            }
        }
    $mysqli->close();
    }    
else
    {
    print("<form action='loggain.php' method='get'>");
    print("User: <input type='text' name='user' size='20'><br/>");
    print("Password: <input type='password' name='password' size='20'></p>");
    print("<input type='submit' value='Log in'>");
    print("</form>");
    }
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