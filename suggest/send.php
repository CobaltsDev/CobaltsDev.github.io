<?php

$name = $_POST['name'];
$Suggest = $_POST['Suggest'];

$to = "benicio.alexander.1@gmail.com";
$subject = "Suggestion";
$body = "$Suggest";

mail ($to,$subject,$body);

echo "message sent! <a href="index.html">Click here</a> to give anouther suggestion."

?>
