<?php

include('header.php');
include('mysql_connection.php'); 

$key = $_POST["pgp_key"];

$query = ("SELECT * FROM `ssm`.`ssm` WHERE pgp_key = '$key'");
$result = $link->query($query);


$i = 0;
while($row = $result->fetch_array()){
	$i++;
	echo $i.".Message ".$row['created'].":";
	echo "<textarea rows='10'>".$row['message']."</textarea>";
}

if($i == 0){
	echo '<p class="r">No messages</p>';		
}

include('footer.php');
$link->close();

