<?php
include "travel.php";
$information = unserialize($_SESSION['dest']);

if (isset($_GET['destination']) && $_GET['places']>0 && isset($_GET['next_step'])) {
    if(isset($_GET['insurance'])) {
        $information->set_destination($_GET['destination']);
        $information->set_places($_GET['places']);
        $information->insurance_true();
    }

    else {
        $information->set_destination($_GET['destination']);
        $information->set_places($_GET['places']);
        $information->insurance_false();
    }

    $_SESSION['dest'] = serialize($information);
    include('passengers.php');
}

else if (isset($_GET['cancel'])) {
    $information->set_sentence();
    $_SESSION['dest'] = serialize($information);
    include('reservation.php');
}

else {
    $information->set_sentence();
    $_SESSION['dest'] = serialize($information);
    include('reservation.php');
}

?>