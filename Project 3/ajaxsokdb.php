<?php 
$q = $_REQUEST['q']; 
include('dbaccess.php'); 
$mysqli = new mysqli($dbhost,$dbusername,$dbpassword,$dbname); 
$mysqli->set_charset('utf8'); 
if ($mysqli->connect_error) {print("<p>Koppling till sql-server misslyckades. Felkod: ".$mysqli->connect_error."</p>");}  
$result = $mysqli->query("SELECT * FROM anvandare2015 WHERE user='$q';"); 
if ($mysqli->error) {print("<p>Sökning kunde inte utföras.<br/>Fel: ".$mysqli->error."</p>");} 
if ($result->num_rows == 0)  
    { 
    print("<p>Inga data hittades för sökningen.</p>"); 
    } 
else 
    { 
    print("<style>table {border: 0px solid;} th {text-align: left;} td {border: 0px solid;} </style>"); 
    print("<table><tr> <th>Användare</th><th>Email</th><th>Roll</th><th>Status</th><tr>"); 
    while($row = $result->fetch_array()) 
      { 
      print("<tr>"); 
      print("<td>".$row['user']."</td>"); 
      print("<td>".$row['email']."</td>"); 
      print("<td>".$row['role']."</td>"); 
      print("<td>".$row['status']."</td>"); 
      print("</tr>"); 
      } 
    print("</table>");  
    } 
$mysqli->close(); 
?>