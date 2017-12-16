<?php

include('./client.php');
include("./travel.php");
$information = unserialize($_SESSION['dest']);
$new_client = unserialize($_SESSION['client']);

if (isset($_GET['back']))
{
	//pourrait d'abbord remettre le $i à (longueur -1) comme ca il remet les valeurs ?
	include("./templates/passengers.php");
}

elseif (isset($_GET['cancel']))
{
	$information->resetInformation();
	$new_client->resetClient();
	include("./templates/reservation.php");
}

elseif (isset($_GET['confirmation']))
{
	include("./templates/confirmation.php");
}

elseif (isset($_GET['back_home']))
{
	$information->resetInformation();
	$new_client->resetClient();
	include("./templates/reservation.php");
}

$_SESSION['client'] = serialize($new_client);
$_SESSION['dest'] = serialize($information);

?>