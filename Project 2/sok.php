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
<h3>Search</h3>
<?php
if (isset($_REQUEST['sokord']))
{
print("<form action='sok.php' method='get'>Search: <input type='text' name='sokord'>");
print("<input type='submit' value='Submit'></form>");
$sok = $_REQUEST['sokord'];
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
$result = $mysqli->query("SELECT * FROM produkter2015 WHERE book LIKE '%$sok%' OR plot LIKE '%$sok%';");
if ($mysqli->error) {print("<p>Search failure.<br/>Fel: ".$mysqli->error."</p>");}
if ($result->num_rows == 0) 
    {
    print("<p>No data found.</p>");
    }
else
    {
    print("<style>table {border: 0px solid;} th {text-align: left;} td {border: 0px solid;} </style>");
    print("<table><tr> <th>Book</th><th>Plot</th><th>Price</th><th>Total</th><th>Seller</th><th>Date</th><tr>");
    while($row = $result->fetch_array())
      {
      print("<tr>");
    print("<td>".$row['book']."</td>");
    print("<td>".$row['plot']."</td>");
    print("<td>".$row['price']."</td>");
    print("<td>".$row['total']."</td>");
    print("<td>".$row['seller']."</td>");
	print("<td>".$row['date']."</td>");
      print("</tr>");
      }
    print("</table>"); 
    }
$mysqli->close();
}
else
{
print("<form action='sok.php' method='get'>Search: <input type='text' name='sokord'>");
print("<input type='submit' value='Submit'></form>");
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