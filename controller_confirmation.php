<?php
$_SESSION['dest'] = unserialize($destination);

if (isset($_GET['destination']) && isset($_GET['places']) && isset($_GET['next_step'])) 
{
	if(isset($_GET['insurance'])) 
	{
		$destination->setDestination($_GET['destination']);
		$destination->setPlaces($_GET['places']);
		$destination->insuranceTrue();
	}

	else
	{
		$destination->setDestination($_GET['destination']);
		$destination->setPlaces($_GET['places']);
		$destination->insuranceFalse();
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
	$destination->setSentence();
	$_SESSION['dest'] = serialize($destination);
	include('reservation.php');
}

?>