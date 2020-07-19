<?php
     $file=fopen("e://output.txt","w");
     fwrite($file,"welcome");
     fclose($file);
     echo "added successfully";
?>