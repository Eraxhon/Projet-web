<?php
include "./client.php";
$new_client = unserialize($_SESSION['client']);


//If a button 'delete' is pressed
if (isset($_GET['delete']))
{
	//Connection to the database

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Reservations";

	$conn = new mysqli($servername,$username, $password, $dbname);

	if($conn->connect_error)
	{
		die("Connection failed : ".$conn->connect_error);
	}

	//End database

	$ID = $_GET['ID_pass'];
	$sql = "DELETE FROM information WHERE ID_pass = $ID";
	$conn->query($sql);
	$conn->close();
	include "controller_database.php";
}

//If a button 'edit' is pressed :
//Returns to the passengers.php page with a button 'Enter' to validate the edit
elseif(isset($_GET['edit']))
{
	$firstname = "";
	$lastname = "";
	$ID_pass = $_GET['ID_pass'];
	var_dump($_GET['ID_pass']);
	$new_client->setID($_GET['ID_pass']);

	$_SESSION['client'] = serialize($new_client);

	$number = $_GET['ID_pass'];
	$button = "<input type = 'hidden' name = 'page' value = 'edit'/>
    		   <input type = 'submit' name = 'enter' value = 'Entrer'/>";
	include "./templates/passengers.php";
}

?>