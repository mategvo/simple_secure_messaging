<?php

include('header.php');
include('mysql_connection.php'); 

$id = '';
for ($i=0; $i < 5 ; $i++) { 
	$id .= md5(uniqid(rand(), true));
}


$key = $_POST["pgp_key"];
$msg = $_POST["message"];

$keyRegex = '/-----BEGIN PGP PUBLIC KEY BLOCK-----([\sa-zA-Z+\/\+0-9\=\s]*)([\=\sa-zA-Z0-9]*)\s-----END PGP PUBLIC KEY BLOCK-----/';
$msgRegex = '/-----BEGIN PGP MESSAGE-----([\sa-zA-Z+\/\+0-9\=\s]*)([\=\sa-zA-Z0-9]*)\s-----END PGP MESSAGE-----/';

$keyValid = preg_match($keyRegex, $key);
$msgValid = preg_match($msgRegex, $msg);

if($keyValid < 1){
	echo '<h3 class="r">Invalid public key</h3>';
}

if($msgValid < 1){
	echo '<h3 class="r">Invalid message</h3>';
}

if($keyValid > 0 && $msgValid > 0){
	$query = ("INSERT INTO `ssm` (`id`,`pgp_key`, `message`) VALUES ('$id', '$key', '$msg')");
	if($link->query($query)){
		echo '<h3 class="g">Message sent</h3>';
	}else{
		echo 'Error sending message';
		echo '<p class="r">'.$link->error.'</p>';
	}
}

include('footer.php');
$link->close();