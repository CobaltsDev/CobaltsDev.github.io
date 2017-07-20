<?php

$name = $_POST['name'];
$submit = $_POST['submit'];

$to = "benicio.alexander.1@gmail.com";
$subject = "Suggestion";
$body = "$submit";

mail ($to,$subject,$body);

echo "message sent! <a href="index.html">Click here</a> to give anouther suggestion."

?>
