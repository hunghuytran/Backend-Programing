<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<table>
<tr>
<td>Ja:</td>
<td>
<img src="poll.gif"
width='<?php echo (10*$yes); ?>'
height='10'>
<?php echo $yes; ?>
</td>
</tr>
<tr>
<td>Nej:</td>
<td>
<img src="poll.gif"
width='<?php echo (10*$no); ?>'
height='10'>
<?php echo $no; ?>
</td>
</tr>
</table>