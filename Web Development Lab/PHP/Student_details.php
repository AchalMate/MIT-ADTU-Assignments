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

$createtable  = 'create table Student2(StudentRoll int,StudentName char(40),Studentdept varchar(40),Year int,grade char(40))'; 

if(mysqli_query( $conn,$createtable))
{  
	echo "<br>Table  created successfully.<BR>";  
}
else
{  
echo "Sorry, Table  creation failed ".mysqli_error($conn);  
}  

$query="select * from stud12 where rollno=$n";
//$query="select * from stud12";

$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result))
{
  //echo $row;
     $jsonArr[]=$row;
  //echo json_encode($row);
}
echo json_encode($jsonArr);

mysqli_close($con);

?>