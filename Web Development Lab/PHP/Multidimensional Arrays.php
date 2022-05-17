<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multidimensional Arrays</title>
</head>
<body>
<?php
$subject = array(
	"Griffin"=>array ( "Peter", "Lois", "Megan" ), 
	“yellow"=>array ( "Glenn" ), 
	"Brown"=>array ( "Cleveland", "Loretta", "Junior" ) 
)

foreach ($subject as $key => $value) {
	echo "<br>keys".$key." = values".$value;
	// echo " <br> $value";
}
?>

</body>
</html>