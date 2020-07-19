<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web";
$conn=mysqli_connect("localhost","root","","web");
if($conn->connect_error{
die("Connection failed:".$conn->connect_error)
}
$a=$_POST["una"];
$b=$_POST["pass"];
$sql="INSERT INTO registration VALUES('$a','$b')";
if($conn->query($sql)===TRUE){
echo "New Record Created Successfully";}
else{echo "connection error";}
$conn->close();
?>