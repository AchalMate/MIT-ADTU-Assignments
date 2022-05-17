<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cookie with php</title>
</head>
<body>
<!-- Develop a system to keep a record of student-mentor meetings. 
Student_Mentor = [studRollNo, studClass, studName, studContact, MentorName, 
issuesDiscussed]
Perform the following operations:
a. Insert the record; 
b. Execute setcookie(‘issues’)=’Set’ after inserting the record. 
c. Display the records only if the issues cookie is set -->
<?php
$localhost = "localhost:3306";
$user = "root";
$pass = "Achal@123";

$conn = mysqli_connect($localhost,$user,$pass);

if(!$conn){
	echo "error";
}else{
	echo "connect";
}
mysqli_select_db($conn,'phpdatbase');

$createTable = "CREATE TABLE studentCookie(roll int(8),class varchar(30))";
if(mysqli_query($conn,$createTable)){
	echo "table created";
}else{
	echo "not created";
}

$insert = "INSERT INTO studentCookie(roll,class) VALUES(105,'cse')";
if(mysqli_query($conn,$insert)){
	echo "data inserted";
	setcookie('issue',"1",time()+6);
	echo "<br>cookie set";
}else{
	echo "error";
}

if(isset($_COOKIE['issue'])){
	$select = "SELECT *FROM studentCookie";
	$result = mysqli_query($conn,$select);
	while($row = mysqli_fetch_assoc($result)){
		echo "<br>" .$row['roll'] . "=>" .$row['class'];
	}
}else{
	echo "cookie not set";
}
?>
</body>
</html>