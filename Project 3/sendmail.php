<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'];
  $topic =  $_REQUEST['topic'] ;
  $name = $_REQUEST['name'] ;
  $like =  $_REQUEST['like'] ;

  mail( $email, $topic,
  "Följande meddelande har skickats:
  $message
  Gillade du min sida? Du har svarat: $like
  
  Denna meddelande var gjord av Hung Tran", "From: $name");

  header( "Location: https://cgi.arcada.fi/~tranhung/feedback.php" );
?>


?>
