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
<h3>Input of books</h3>
<?php
if ((isset($_SESSION['user'])))
{
if (isset($_REQUEST['book']))
    {
    //allt inmatat, skicka till databasen
    $book = $_REQUEST['book'];
    $plot = $_REQUEST['plot'];
    $price = $_REQUEST['price'];
    $total = $_REQUEST['total'];
    $seller = $_SESSION['user'];
    $date = $_SESSION['date'];
    include('dbaccess.php');
    $mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
    $mysqli->set_charset('utf8');
    if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
    $result = $mysqli->query("INSERT INTO produkter2015 (book,plot,price,total,seller,date) 
    VALUES ('$book','$plot','$price','$total','$seller','$date');");
    if ($mysqli->error) {print("<p>Inmatning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");}
    if ($mysqli->affected_rows == 0) 
        {
        print("<p>Failed to submit book</p>");
        }
    else
        {
        print("<p>Submitted <a href='matain.php'>Submit more?</a></p>");
        }
    $mysqli->close();
    }
else
    {
    //skriv ut formulär för inmatning
    print("<p><form action='matain.php' method='post'>");
    print("Book: <br/><input type='text' name='book' size='40'><br/>");
    print("Plot: <br/><input type='text' name='plot' size='60'><br/>");
    print("Price: <br/><input type='text' name='price' size='10'><br/>");
    print("Total: <br/><input type='text' name='total' size='10'><br/>");
    print("<input type='submit' value='Submit'>");
    print("</form></p>");
    }
}
else
{
print("<p>You need to be logged in to submit. <a href='loggain.php'>Log in</a></p>");
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