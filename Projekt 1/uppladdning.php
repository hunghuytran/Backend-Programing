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
<a href="https://cgi.arcada.fi/~tranhung/BE2015/uppladdning.phps">PHPS-filen</a>
<?php
$target_dir = "uppladdningar/";
$target_file = $target_dir . basename($_FILES["filnamn"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filnamn"]["tmp_name"]);
    if($check !== false) {
        echo "<p>Filen är en bild av mimetyp - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
    } else {
        echo "<p>Filen är inte en bild.</p>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "<p>Error, men filen finns redan.</p>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filnamn"]["size"] > 500000) {
    echo "<p>Error, men filen är för stor.</p>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<p>Error, men bara jpg, jpeg, png & gif filer tillåts.</p>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "<p>Error, filen kan inte laddas upp.</p>";
// if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["filnamn"]["tmp_name"], $target_file)) 
    {
        echo "<p>Filen ". basename( $_FILES["filnamn"]["name"]). " har uppladdats</p>.";
        echo "<p>Filen finns i katalogen <a href='uppladdningar'>uppladdningar</a>. Tryck på filer igen för att se existerande filer på servern.</p>";
    } 
    else 
    {
        echo "<p>Error 404</p>";
    }
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