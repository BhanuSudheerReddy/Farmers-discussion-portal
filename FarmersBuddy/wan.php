<html>
<head>
<?php
if(isset($_POST['submit'])){
$uname=$_POST["name"];
$passw=$_POST["password"];
$pass_len=strlen($passw);
$email=$_POST["email"];
$phonu=$_POST["numb"];
$ph_len=strlen($phonu);
if(empty($uname)){
   $msg= "name should be filled";
     }
else if(empty($passw)){
   $msg= "password should be filled";
     }
else if($pass_len<=8){
   $msg= "password length more than eight chars";
     }
else if(empty($email)){
   $msg= "email should be filled";
     }
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   $msg= "enter the valid email";
     }
else if(empty($phonu)){
   echo "phone number should be filled";
     }
else if(empty($ph_len<10)){
   $msg= "enter phone number";
}
}
?>
</head>
<body>
<form method="post">
name<input type="text" name="name" ><br>
password<input type="text" name="password"><br>
email<input type="email" name="email"><br>
phone number<input type="text" name="numb"><br>
<input type="submit" name="submit" value="submit">
<p><?php if(isset($msg)){
              echo "$msg";
            }
?>
</form>
</body>
</html>