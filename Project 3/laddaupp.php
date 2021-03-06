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
<tr><td><h1>Projekt 3</h1></td></tr>
<tr><td><h4>Advanced PHPAJAX</h4></td></tr>
</table>
</header>
<nav>
<ul>
    <li><a href="start.php">start</a></li>
    <li><a href="poll.php">poll</a></li>
    <li><a href="feedback.php">feedback</a></li>
    <li><a href="ajaxsok.php">ajaxsok</a></li>
    <li><a href="foresla.php">föreslå</a></li>
    <li><a href="ajaxxml.php">ajaxxml</a></li>
    <li><a href="blogg.php">blogg</a></li>
    <li><a href="wiki.php">wiki</a></li>
    <li><a href="tube.php">tube</a></li>
    <li><a href="butik.php">butik</a></li>
</ul>
</nav>
<div id="innehall">
<article>
<h3>Fotoarkiv</h3>
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
    echo "<p>Sorry, filen finns redan.</p>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["filnamn"]["size"] > 500000) {
    echo "<p>Sorry, filen är för stor.</p>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<p>Sorry, bara jpg, jpeg, png & gif filer tillåts.</p>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "<p>Sorry, filen kan inte laddas upp.</p>";
// if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["filnamn"]["tmp_name"], $target_file)) 
    {
        echo "<p>Filen ". basename( $_FILES["filnamn"]["name"]). " har uppladdats</p>.";
		    print('<a href="laddauppan.php?adress='.$target_file.'">Lägg till beskrivning.</a>'); 
    } 
    else 
    {
        echo "<p>Sorry, någonting gick fel.</p>";
    }
}
?>
<br>


</article>
<aside>
</aside>
</div>
<footer><table><tr><td>&copy;Copyright hung.tran@arcada.fi</td><td></td><td>17.2.2015</td></tr></table></footer>
</div>


</body>

</html>