<?php
include "./client.php";
$new_client = unserialize($_SESSION['client']);




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

//sélectionner le bon passager et changer ses coord

$lastname = $_GET['lastName'];
$firstname = $_GET['firstName'];
$names = $firstname + $lastname ;
$age = $_GET['age'];

$ID = $new_client->getID();
var_dump($ID);

$sql = "UPDATE information
		SET Noms = '$firstname $lastname',  Age = '$age'
		WHERE ID_pass = '$ID'";

$conn->query($sql);

$conn->close();

$_SESSION['client'] = serialize($new_client);
include "controller_database.php";
?>