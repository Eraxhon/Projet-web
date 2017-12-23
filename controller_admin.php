<?php

//Connection to the database

$servername="localhost";
$username="root";
$password="root";
$dbname="Reservations";

$conn = new mysqli($servername,$username, $password, $dbname);

if($conn->connect_error)
{
	die("Connection failed : ".$conn->connect_error);
}

//Following

//If a button 'delete' is pressed
if (isset($_GET['delete']))
{
	$ID=$_GET['ID_pass'];
	$sql = "DELETE FROM information WHERE ID_pass = $ID";
	$conn->query($sql);
	$conn->close();
	include('controller_database.php');
}
/*
//If a button 'edit' is pressed
elseif(isset($_GET['edit']))
{
	include('../templates/admin.php');
}

			
include("controller_database.php");

*/

?>