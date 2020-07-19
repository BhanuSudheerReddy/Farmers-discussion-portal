<?php
      if(isset($_POST['submit'])){
         $name=$_POST['name'];
         $pass=$_POST['pass'];
         $length=strln($pass);
         $pattern="/[a-zA-Z0-9.-_]+/";
         $email=$_POST['email'];
         $number=$_POST['number'];
         $match=preg_match($pattern,$pass);
      if(empty($name)){
                 $error="name is required";
        }
        else if(empty($pass)){
                 $error="pssword is required";
        }
        else if($length<8){
                 $error="psssword is too short";
        }
        else if(!$match){
                 $error="password should contain one special character");
        }
        
        else if(empty($email)){
                 $error="email is required";
        }
        else if(!filter_var($email,FLER_VALIDATE_EMAIL)){
                 $error="please enter a valid email address;
        }
        else if(empty($number)){
                 $error="number is required";
        }


}
   ?>
<html>
<head>
</head>
<body>
<form method="post" action="formvalid.php">
name<input type="text" name="name"><br>
password<input type="password" name="pass"><br>
email<input type="email" name="email"><br>
phone<input type="text" name="number"><br>
<input type="submit" value="submit">
</form>
     <?php
         if(isset($error)){
            echo $error;
          }
        
     ?>
</body>
</html>