<?php
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture";

$conn=mysqli_connect("localhost","root","","agriculture");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["email"];
$d=$_POST["ortho"];
$f=$_POST["yad"];
$g=$_POST["push"];
$h=$_POST["pass1"];
$i=$_POST["pass2"];
$sql="INSERT INTO details VALUES('$a','$b','$c','$d','$f','$g','$h','$i')";
if($conn->query($sql)===TRUE){
echo "New record created successfully";
}else{
echo "Error.".$sql."<br>".$conn->error;
}
$conn->close();
?>








