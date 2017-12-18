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

/*
If the 'cancel' button is pressed :
Reserts each variable's values  in the classes 'information' and 'new_client'
Includes the home page
*/
elseif (isset($_GET['cancel']))
{
	$information->resetInformation();
	$new_client->resetClient();
	include("./templates/reservation.php");
}

elseif (isset($_GET['confirmation']))
{

		//Fill in the database
		$servername="localhost";
		$username="root";
		$password="root";
		$dbname="Reservations";

		$conn = new mysqli($servername,$username, $password, $dbname);

		if($conn->connect_error)
		{
			die("Connection failed : ".$conn->connect_error);
		}

		//Fill in the table 'groupe' (only once because same info for each passenger)

			$i=0;
			$dest=$information->getDestination($i);
			$total=$new_client->getTotal($i);
			$insurance=$information->getInsurance($i);

			$sql="INSERT INTO groupe (Destination, Prix, Assurance) VALUES('".$dest ."', '".$total ."', '".$insurance ."')";

		/*if ($conn->query($sql)===TRUE) 
		{
			echo "New record created successfully";
		}*/

		if($conn->query($sql)!=TRUE) 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		//Error if not succeeded
		else 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		//Fill in the table 'information'
		for($i=0; $i<count($new_client->getClients()); $i++)
		{
			$name=$new_client->getNames($i);
			$age=$new_client->getAge($i);
			$sql="INSERT INTO information (ID_groupe, Noms, Age) VALUES('".$ID_insert ."', '".$name ."', '".$age ."')";
		}

		/*if ($conn->query($sql)===TRUE) 
		{
			echo "New record created successfully";
		}*/

		if($conn->query($sql)!=TRUE) 
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		//end database

	include("./templates/confirmation.php");
}

/*
If the 'Retour à la page précédente' button is pressed :
The new_client class parameters are reset (passenger's info)
Includes the passengers page
*/
elseif (isset($_GET['back']))
{
	$new_client->resetClient();
	include("./templates/passengers.php");
}

else
{
	break;
}

$_SESSION['client'] = serialize($new_client);
$_SESSION['dest'] = serialize($information);

?>