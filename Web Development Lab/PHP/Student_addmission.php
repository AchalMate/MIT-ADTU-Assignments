<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Admission Details </title>
</head>
<body>
<!-- Design students admission form having the following fields 
=[studentID,studentName,emailID,12thGrade,JEEScore]
Write a PHP script to display top 5 students based on JEEScore.
 -->
 	
 	<form method="POST" >
 		Enter Student Id :<input type="number" name="studId"><br>
 		Enter student Name :<input type="text" name="studname"><br>
 		Enter Student Email :<input type="emai" name="studemail"><br>
 		Enter Student 12Grade :<input type="number" name="grade_HSC"><br>
 		Enter Student JEEScoree :<input type="number" name="JeeScore"><br>
 		<button type="Submit" onclick="insertrecord()">Submit</button>

 	</form>
 	


<?php

$host = 'localhost:3306';  
$user = 'root';  
$pass = 'Achal@123';  
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo '<br>Connected successfully<br>'; 
mysqli_select_db($conn,'phpdatbase'); 
echo "<br>In Database Successfully<br>";
// $createtable  = 'create table Student(StudentID int,StudentName char(40),StudentEmail varchar(40),HSC_Grade int,JEEScore int)'; 

// if(mysqli_query( $conn,$createtable))
// {  
// 	echo "<br>Table  created successfully.<BR>";  
// }
// else
// {  
// echo "Sorry, Table  creation failed ".mysqli_error($conn);  
// }  



function insertrecord() 
{
    $id = $_REQUEST['studId'];
	$name = $_REQUEST['studname'];
	$email= $_REQUEST['studemail'];	
	$hsc = $_REQUEST['grade_HSC'];
	$jee = $_REQUEST['JeeScore'];
	echo $id,$name,$email,$hsc,$jee."<br>";
	$insertRecord  = 'insert into Student values($id,$name,$email,$hsc,$jee)';

	if(mysqli_query($conn,$insertRecord))
	{
		echo "<br>Record insert Successfully";
	}
}


?>

 </body>
</html>