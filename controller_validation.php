<?php

include "./client.php";
include "./travel.php";
$information = unserialize($_SESSION['dest']);
$new_client = unserialize($_SESSION['client']);

if (isset($_GET['back']))
{
	$number = $new_client->getNumber() -1;
	$button = "<input type = 'hidden' name = 'page' value = 'passenger'/>
               <input type = 'submit' name = 'next_step' value = 'Etape suivante'/>";

	$lastClient = $new_client->getLastClient();
	$firstname = $lastClient[0];
	$lastname = $lastClient[1];
	$new_client->resetClient();
	$_SESSION['client'] = serialize($new_client);
	include "./templates/passengers.php";
}

/*
If the 'cancel' button is pressed :
Resets each variable's values  in the classe 'new_client'
Destroys the session
Includes the home page
*/
elseif (isset($_GET['cancel']))
{
	$new_client->resetClient();
	session_destroy();
	include "./templates/reservation.php";
}

elseif (isset($_GET['confirmation']))
{
	//nessessary to set the parameter 'price' in the class
	$new_client->getPrice($information->getInsurance());

		//Connection to the database
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "Reservations";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if($conn->connect_error)
		{
			die("Connection failed : ".$conn->connect_error);
		}

		//Fill in the table 'groupe' (only once because same info for each passenger)
		$dest = $information->getDestination(0);
		$total = $new_client->getTotal(0);
		$insurance = $information->getInsurance(0);

		$sql = "INSERT INTO groupe (Destination, Prix, Assurance) VALUES('".$dest ."', ".$total .", '".$insurance ."')";
		$conn->query($sql);
		$ID_insert = $conn->insert_id;

		//Fill in the table 'information' (one line per passenger)
		for($i=0; $i<(count($new_client->getClients())); $i++)
		{
			$name = $new_client->getNames($i);
			$age = $new_client->getAge($i);
			$sql = "INSERT INTO information (ID_groupe, Noms, Age) VALUES('".$ID_insert ."', '".$name ."', ".$age .")";
			$conn->query($sql);
		}
		
		$conn->close();

		//end database

	include "./templates/confirmation.php";
}

/*
If the 'Retour à la page précédente' button is pressed :
The new_client class parameters are reset (passenger's info)
Includes the passengers page
*/
elseif (isset($_GET['back']))
{
	$new_client->resetClient();
	include "./templates/passengers.php";
}

$_SESSION['client'] = serialize($new_client);
$_SESSION['dest'] = serialize($information);

?>