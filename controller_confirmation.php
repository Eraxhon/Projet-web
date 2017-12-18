<?php
$_SESSION['dest'] = unserialize($destination);

if (isset($_GET['destination']) && isset($_GET['places']) && isset($_GET['next_step'])) 
{
	if(isset($_GET['insurance'])) 
	{
		$information->setDestination($_GET['destination']);
		$information->setPlaces($_GET['places']);
		$information->insuranceTrue();
	}

	else
	{
		$information->setDestination($_GET['destination']);
		$information->setPlaces($_GET['places']);
		$information->insuranceFalse();
	}
	$_SESSION['dest'] = serialize($destination);
	include('passengers.php');
}

else if (isset($_GET['cancel'])) 
{
	$_SESSION['dest'] = serialize($destination);
	include('reservation.php');
}

else 
{
	$information->setSentence();
	$_SESSION['dest'] = serialize($destination);
	include('reservation.php');
}

?>