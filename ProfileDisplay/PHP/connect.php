<?php

$host='localhost';
$db = 'displaycards';
$username = 'root';
$password = '';
try{

	$dbo = new PDO("mysql:host=$host;dbname=$db", $username, $password);

	if($dbo){
	echo "";
	}
}
catch (PDOException $e){
echo $e->getMessage();
}
?>