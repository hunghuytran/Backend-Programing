<?php
session_start();
?>
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
<h3>Uppladdningar</h3>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/uppladdning.phps">PHPS-filen uppladdning</a>
<a href="https://cgi.arcada.fi/~tranhung/BE2015/filer.phps">PHPS-filen filer</a>
<form action="uppladdning.php" method="post" enctype="multipart/form-data">Tryck här för att ladda upp: 
    <input type="file" name="filnamn" id="filnamn"><br/>
    <input type="submit" value="Ladda upp" name="submit">
</form>
<?php
		echo "<p>Bara jpg, jpeg, png & gif filer tillåts.</p>";
		echo "<p>Filer finns i katalogen <a href='uppladdningar'>uppladdningar</a>.</p>";
		$dir = "uppladdningar/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "".$file."<br>";
    }
    closedir($dh);
  }
}
?>
</p>
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