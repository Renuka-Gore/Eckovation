<!DOCTYPE html>
<html>
<head>
	<title>MYSQL check</title>
</head>
<body>
   <?php
        $con = mysqli_connect('localhost','root','renuka123');
if($con){
	echo "Connection successful! You are connected to database";
} else{
	echo "No Connection Available!";
}

   ?>
</body>
</html>