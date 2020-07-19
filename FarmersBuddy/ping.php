<html><head>
</head>
<body>
<?php
$myfile=fopen("el.txt","r") or die("unable to open");
echo fgets($myfile);
fclose($myfile);
?>
</body>
</html>