<?php
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture";

$conn=mysqli_connect("localhost","root","","agriculture");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$a=$_POST["name"];
$b=$_POST["umb"];
$c=$_POST["o"];
$d=$_POST["age"];
$f=$_POST["try"];
$g=$_POST["code"];

$sql="INSERT INTO details1 VALUES('$a','$b','$c','$d','$f','$g')";
if($conn->query($sql)===TRUE){
echo "New record created successfully";
}else{
echo "Error.".$sql."<br>".$conn->error;
}
$conn->close();
?>








