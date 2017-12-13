<?php
include_once "client.php";
include_once "travel.php";
$new_client = unserialize($_SESSION['client']);
$information = unserialize($_SESSION['dest']);


if (isset($_GET['age']) && isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['next_step'])) {
	
	// Si tout est set -> on met toutes les infos dans la liste.
	$new_client->add_client($_GET['firstName'], $_GET['lastName'], $_GET['age']);
	$_SESSION['client'] = serialize($new_client);
	
	//Si on a pas encore assez de passagers; on remet une page passagers
	if($new_client->get_number() <= (int) $information->get_places()) {	
		include('passengers.php');
	}

	//Sinon, on met Validation 
	else{
		include('validation.php');
	}
}

else {
	$new_client->set_sentence();
	include('passengers.php'); //avec la phrase ajoutée
}

$_SESSION['client'] = serialize($new_client);
$_SESSION['dest'] = serialize($information);
?>