<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Grade</title>
</head>
<body>

<!-- <!-- <?php

$marks = 86;
if($marks >= 60){
	echo "First Division";
}elseif ($marks >=45 and $marks<=59) {
	echo "Second Division";
}elseif ($marks >=33 and $marks<=44){
	echo "Third Division";
}else{
	echo "Fail";
}

?> --> -->

<?php
$localhost = "localhost:3306";
$user = "root";
$pass = "Achal@123";
$conn = mysqli_connect($localhost,$user,$pass);

if(!$conn){
	echo "Error!";
}else{
	echo "Connected DB <br>";
}

mysqli_select_db($conn,"phpdatbase"); 
// $createTable = "CREATE TABLE Login(username  varchar(20), email varchar(50),password varchar(30))";
// if(mysqli_query($conn,$createTable)){
// 	echo "table created";
// }else{
// 	echo "Error";
// }

// $insertrecord = "insert into Login values('Achal','achalmate01@gmail.com','Achal123')";
// if(mysqli_query($conn,$insertrecord)){
// 	echo "record inserted";
// }else{
// 	echo "Error";
// }


?>


</body>
</html>