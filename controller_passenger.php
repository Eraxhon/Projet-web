<?php
include "client.php";
//include "travel.php";
$new_client = unserialize($_SSESSION['client']);

var_dump($_GET);
//recuperer le nombre de clients


//créer les clients avec les fonction definies dans classe client (client.php)

//1. récupérer les valeurs (au début; pas de valeurs donc on met juste passengers)

if (isset($_GET['age']) && isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['next_step'])) {
	while($new_client->$number<=$information->$places);
		$new_client->add_client($_GET['firstName'], $_GET['lastName'], $_GET['age']); //appelle la fonction pour ajouter un client
		$_SESSION['client'] = serialize($new_client);
		include('passengers.php');
}


else {
	$new_client->set_sentence();
	include('passengers.php'); //avec la phrase ajoutée
}


$_SESSION['client'] = serialize($new_client);
?>