<?php

    include "./travel.php";


    if (isset($_GET['destination']) && $_GET['places'] > 0 && isset($_GET['next_step']))
    {
        $information = unserialize($_SESSION['dest']);

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
        
        $_SESSION['dest'] = serialize($information);
        include "./templates/passengers.php";
    }

    else if (isset($_GET['cancel'])) 
    {
        
        include "./templates/reservation.php";
    }

    else 
    {
        $information = unserialize($_SESSION['dest']);
        $information->setSentence();
        $_SESSION['dest'] = serialize($information);
        include "./templates/reservation.php";
    }

?>