<?php

require("connect.php");

$folder ="../images/"; 

$image = $_FILES['image']['name']; 

$location = $folder . $image ; 

$allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['image']['name'];

$ext=pathinfo($filename, PATHINFO_EXTENSION); if(!in_array($ext,$allowed) )

{

 echo "Sorry, only JPG, JPEG, PNG & GIF  files are allowed.";

}

else{
move_uploaded_file( $_FILES['image'] ['tmp_name'], $location);
echo "Image Location :".$location;
$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

echo $location;
$push = $dbo->prepare("INSERT INTO queue (Title, Description, Image)   VALUES ('".$_POST["titleintro"]."','".$_POST["Desc"]."','".$location."')");
$push->execute(); 
header('Location: CardPage.php');



?>