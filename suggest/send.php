<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "benicio.alexander.1@gmail.com";
$subject = "Suggestion";
$body = "$request";

mail ($to,$subject,$body);

echo "message sent! <href="https://www.cobalts.net/suggest/">Click here to give anouther suggestion</a>"

?>
