<?php
     if(isset($_POST['submit'])){
        if(count($_FILES['upload']['name'])){
                 //loop through each file
                        for($i=0; $i<count($_FILES['upload']['name']); $i++){
           $tempFilePath=$_FILES['upload']['name'][$i];
                  if($tempFilePath!=""){
                       $shortname=$_FILES['upload']['name']['$i'];
           $filePath="upload/".date('d-m-Y-H-i-s').'-'.$_FILES['upload']['name'][$i];
if(move_uploaded_file($tempFilePath,$filePath)){
   $files[]=$shortname;
                     }
          }
     }
    }
echo "uploaded";
if(is_array($files)){
           echo "<ul>";
      foreach($files as $file){
                        echo "$file";
                      }
               echo "<ul>";
    }
}
?>
<html>
<head>
</head>
<body>
<form method="post" enctype="multipart/form-data">
     
   <div>
         <label for='upload'>add attachments</label>
         <label id='upload' name="upload[]" type="file" multiple="multiple">
                    <input type="submit" name=submit value="submit">
   </div>
</form>
</body>
</html>      