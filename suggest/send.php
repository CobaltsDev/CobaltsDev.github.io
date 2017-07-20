<?php

$name = $_POST['name'];
$submit = $_POST['submit'];

$to = "benicio.alexander.1@gmail.com";
$subject = "Suggestion";
$body = "$submit";

mail ($to,$subject,$body);

echo "message sent! <href="https://www.cobalts.net/suggest/">Click here to give anouther suggestion</a>"

?>
