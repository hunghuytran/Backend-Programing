<?php 
$q = $_REQUEST['q']; 
include('dbaccess.php'); 
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname); 
$mysqli->set_charset('utf8'); 
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");}  
$result = $mysqli->query("SELECT * FROM sokord2015 WHERE ord LIKE '$q%';"); 
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");} 
if ($result->num_rows == 0)  
    { 
    print("Finns ej"); 
    } 
else 
    { 
    while($row = $result->fetch_array()) 
      { 
      print("<a href='".$row['lank']."' style='text-decoration: none;'>".$row['ord']."</a></br>"); 
      } 
    } 
$mysqli->close(); 
?>