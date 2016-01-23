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
<h3>Admin access</h3>
<?php
if ((isset($_SESSION['user']))&&($_SESSION['role']=="admin"))
{
include('dbaccess.php');
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);
$mysqli->set_charset('utf8');
$anv = $_SESSION['user'];
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");} 
//val av tabell
if (!isset($_REQUEST['tabell']))
    {
    print("<form action='admin.php' method='post'>Table: <select name='tabell'>
    <option value=''>Choose table</option>
    <option value='anvandare2015'>usernames</option>
    <option value='produkter2015'>books</option>
    </select><input type='submit' value='Search'></form>");
    }
else
    {
    print("<form action='admin.php' method='post'>Table: <select name='tabell'>
    <option value=''>Choose table</option>
    <option value='anvandare2015'>usernames</option>
    <option value='produkter2015'>books</option>
    </select><input type='submit' value='Search'></form>");
    $tabell = $_REQUEST['tabell'];
    $result = $mysqli->query("SELECT * FROM $tabell;");
    if ($mysqli->error) {print("<p>Search failure.<br/>Error: ".$mysqli->error."</p>");}
    if ($result->num_rows == 0) 
        {
        print("<p>No data found</p>");
        }
    else
        {
        $antalkolumner = $result->field_count;
        print("<style>table {border: 0px solid;} th {text-align: left;} td {border: 0px solid;} </style>");
        print("<table><tr>");
        for ($i=1;$i<$antalkolumner;$i++)
        {
        //sök namnet för fältet
        $faltinfo = $result->fetch_field_direct($i);
        $faltnamn = $faltinfo->name;
        if (!(($tabell=="anvandare2015")&&(($i==2)||($i==11))))
        {print("<th>".$faltnamn."</th>");}
        }
        print("</tr>");
        while($row = $result->fetch_array())
        {
        print("<tr>");
        for ($i=1;$i<$antalkolumner;$i++)
            {
            if (!(($tabell=="anvandare2015")&&(($i==2)||($i==11))))
            {print("<td>".$row[$i]."</td>");}
            }
        $idn = $row['id'];
        print("<td><form action='andrany.php?id=$idn' method='post'><input type ='submit' value='Edit'/></form></td>");
        print("<td><form action='raderapost.php?id=$idn&tabell=$tabell' method='post'><input type ='submit' value='Delete'/></form></td>");
        print("</tr>");
        }
        print("</table>"); 
        }
    $mysqli->close();
    }
}
else
{
print("<p>You must be logged in as administrator to access this site.</p>");
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