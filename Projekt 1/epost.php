<!DOCTYPE html >
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
<title>Back-end programmering</title>
<link type="text/css" rel="stylesheet" href="stil.css" />
</head>

<body>
<div id="sidan">
<header>
<table>
<tr><td><h1>P1</h1></td></tr>
<tr><td><h4>- Grundläggande PHP -</h4></td></tr>
</table>
</header>
<nav>
<ul>
    <li><a href="system.php">system</a></li>
    <li><a href="tid.php">tid</a></li>
    <li><a href="datum.php">datum</a></li>
    <li><a href="epost.php">epost</a></li>
    <li><a href="cookies.php">cookies</a></li>
    <li><a href="session.php">session</a></li>
    <li><a href="filer.php">filer</a></li>
    <li><a href="logg.php">logg</a></li>
    <li><a href="gast.php">gast</a></li>
    <li><a href="rapport.php">rapport</a></li>
</ul>
</nav>
<div id="innehall">
<article>
<h3>Email post</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/epost.phps">PHPS-filen</a>
<br/>
<?php
if ((isset($_REQUEST['user']))&&(isset($_REQUEST['email'])))
{
    if ((($_REQUEST['user'])!="")&&(($_REQUEST['email'])!=""))
    {
$user = $_REQUEST['user'];
$email = $_REQUEST['email'];
		 if ((!preg_match("/^[a-zA-Z ]*$/",$user))&&(!filter_var($email, FILTER_VALIDATE_EMAIL))) {
      $error = "Kontrollera att email och användarnamn är giltiga."; 
	  echo $error;
    }
	else
	{
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}

$password = randomPassword();
print("<p>En e-post har skickats till ".$email.".<br/> Din användarnamn är: ".$user." och en lösenord har skickats till din mail.</p>");
$receiver = filter_var($email, FILTER_SANITIZE_EMAIL);
$topic = "Lösenord för inloggning.";
$msg = "Kära ".$user."! Du har begärt om ett lösenord. Ditt lösenord är: ".$password.". Goda hälsningar från admin.";
mail($receiver,$topic,$msg);
	}	
	}
	else
	{
    print("<p>Du måste skriva in användarnamn och email. <a href='epost.php'>Försök igen</a></p>");
	}
}
else
	{
print("<form action='epost.php' method='get'>");
print("Användare: <input type='text' name='user' size='20'><br/>");
print("Email: <input type='text' name='email' size='40'>. </p>");
print("<input type='submit' value='Skicka'>");
print("</form>");
}
?>
</section>
<section>
</section>
<section>
</section>
</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright,2015</td><td>hung.tran@arcada.fi</td><td>20.1.2015</td></tr></table></footer>
</div>


</body>

</html>