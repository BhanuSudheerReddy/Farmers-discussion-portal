<?php 
     $myfile=unlink("G://outlog.txt");
    if($myfile){
     echo "success";
    }else{
     echo "not found";
     }
?>