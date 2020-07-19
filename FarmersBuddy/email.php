<?php

$from="gandeshiva9@gmail.com";

$email=$_POST["emi"];

$subject=$_POST["text"];

$message=$_POST["ar"];

mail($email,$subject,"From:".$from);

print "your email hasbeen sent:<br>$email<br>$subject<br>$message<br>;

?>