<?php

$email = $_REQUEST["email"];
$password = $_REQUEST["senha"];

if($email == 'email@email.com' && $password == 'admin'){
	echo json_encode(true);
}else{
	echo json_encode(false);
}

?>