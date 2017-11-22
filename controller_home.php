<?php
include ("travel.php") ;
$information = new information();
$_SESSION['dest'] = serialize($information);

include("client.php");
$new_client = new new_client();
$_SESSION['client'] = serialize($new_client);

include('reservation.php');
?>