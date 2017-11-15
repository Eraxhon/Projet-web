<?php
include ("client.php") ;
$destination = new destination();
$_SESSION['dest'] = serialize($destination);
include('reservation.php');
?>