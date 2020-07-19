<?php
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture";
$conn=mysqli_connect("localhost","root","","agriculture");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$a=$_POST["dissg"];
$b=$_POST["wow"];
$sql="INSERT INTO temporary VALUES('$a','$b')";
if($conn->query($sql)===TRUE){
echo "new record created successfully";
}else{
echo "Error.".$sql."<br>".$conn->error;
}
$conn->close();
?>