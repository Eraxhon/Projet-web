<?php
include_once "client.php";
include_once "travel.php";
$new_client = unserialize($_SESSION['client']);
$information = unserialize($_SESSION['dest']);


if (isset($_GET['age']) && isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['next_step'])) {
	if($new_client->size_client()+1 < (int) $information->get_places()) {
		$new_client->add_client($_GET['firstName'], $_GET['lastName'], $_GET['age']); //appelle la fonction pour ajouter un client
		$_SESSION['client'] = serialize($new_client);
		var_dump($new_client->size_client());
		include('passengers.php');
	}
}

else {
	$new_client->set_sentence();
	include('passengers.php'); //avec la phrase ajoutée
}

$_SESSION['client'] = serialize($new_client);
$_SESSION['dest'] = serialize($information);
?>