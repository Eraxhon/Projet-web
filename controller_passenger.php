<?php

	include_once "./client.php";
	include_once "./travel.php";
	$new_client=unserialize($_SESSION['client']);
	$information=unserialize($_SESSION['dest']);

	if ((!empty($_GET['age'])) && (!empty($_GET['firstName'])) && (!empty($_GET['lastName'])) 
		&& isset($_GET['next_step']))
	{
		//Adds the information in the 'client' class
		$new_client->addClient($_GET['firstName'], $_GET['lastName'], $_GET['age']);
		$_SESSION['client']=serialize($new_client);

		if($new_client->getNumber()<=(int) $information->getPlaces())
		{	
			include('./templates/passengers.php');
		}

		else
		{
			include('./templates/validation.php');
		}	
	}

	else 
	{
		$new_client->setSentence();
		$_SESSION['client']=serialize($new_client);
		include('./templates/passengers.php');
	}

	$_SESSION['client']=serialize($new_client);
	$_SESSION['dest']=serialize($information);

?>