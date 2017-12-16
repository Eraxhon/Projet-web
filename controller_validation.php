<?php
include('client.php');
include("travel.php");
$information = unserialize($_SESSION['dest']);
$new_client = unserialize($_SESSION['client']);

if (isset($_GET['back'])){
	//pourrait d'abbord remettre le $i à (longueur -1) comme ca il remet les valeurs ?
	include("passengers.php");
}

elseif (isset($_GET['cancel'])){
	$information->reset_information();
	$new_client->reset_client();
	include("reservation.php");
}

elseif (isset($_GET['confirmation'])){
	include("confirmation.php");
}

elseif (isset($_GET['back_home'])){
	var_dump($information->destination);
	$information->reset_information();
	$new_client->reset_client();
	include("reservation.php");
}

$_SESSION['client'] = serialize($new_client);
$_SESSION['dest'] = serialize($information);
?>