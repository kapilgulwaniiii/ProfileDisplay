<?php

$host='localhost';
$db = 'displaycards';
$username = 'root';
$password = '';
try{

	$dbo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
	$del = $dbo->prepare("DELETE FROM queue LIMIT 1");
	$del->execute();
	

	if($dbo){
	echo "Connection to the database $db made successfully!";
	}
}
catch (PDOException $e){
echo $e->getMessage();
}
?>