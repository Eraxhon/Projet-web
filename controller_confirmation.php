<?php
$_SESSION['dest'] = unserialize($destination);

if (isset($_GET['destination']) && isset($_GET['places']) && isset($_GET['next_step'])) {
	if(isset($_GET['insurance'])) {
		$destination->set_destination($_GET['destination']);
		$destination->set_places($_GET['places']);
		$destination->insurance_true();
	}
	else {
		$destination->set_destination($_GET['destination']);
		$destination->set_places($_GET['places']);
		$destination->insurance_false();
	}
	$_SESSION['dest'] = serialize($destination);
	include('passengers.php');
}

else if (isset($_GET['cancel'])) {
	$_SESSION['dest'] = serialize($destination);
	include('reservation.php');
}

else {
	$destination->set_sentence();
	$_SESSION['dest'] = serialize($destination);
	include('reservation.php');
}

?>