<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/CardPage.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

</style>
</head>
<body>
<link rel="stylesheet" href="../CSS/CardPage.css">

<h2 style="text-align:center">Here are the most recent cards </h2>
<div class="cardcollection">
<?php
require("connect.php");

$pull = $dbo->prepare("SELECT Indexs, Title, Description, Image FROM queue LIMIT 6");
$pull->execute();

$data=$pull->fetchAll();

$counter1=0;
echo "</br>";
echo "<div class=\"cardcollection\">";
  foreach($data as $v) {
        $counter1++;
			echo " 
			<div class='column'>
			<div class= '$counter1'>
			
			<div class='card'>
				<h3>Profile ".$v["Indexs"]."</h3>
				<img src='".$v["Image"]."' width='100px' height='100px' style='border:1px solid #333333'>
				<p>".$v["Title"]."</p>
				<p>".$v["Description"]."</p>
				
			</div>
			</div>
			</div> ";}

echo "</div>";

$xcount = $dbo->query("SELECT COUNT(1) FROM queue")->fetchColumn();



?>

<script>
setInterval(function() {
    console.log("hello");
	var xhttp = new XMLHttpRequest();
  
  xhttp.open("GET", "Dequeue.php", true);
  xhttp.send();
  
  var element = document.getElementsByClassName("cardcollection");
  
  element.outterHTML="";
  
  

}, 30000); 
</script>

<p><?php echo "Remaining count is:".$xcount;?> </p>

</body>
</html>
