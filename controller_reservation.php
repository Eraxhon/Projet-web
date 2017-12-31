<?php
    include "./travel.php";
    include "./client.php";

    $firstname = "";
    $lastname = "";
    
    //If all the parameters have been filled in, there are put in the class 'information'
    if (isset($_GET['destination']) && $_GET['places'] > 0 && isset($_GET['next_step']))
    {
        $information = unserialize($_SESSION['dest']);
        $new_client = unserialize($_SESSION['client']);

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

        $number = $new_client->getNumber();
        $button = "<input type = 'hidden' name = 'page' value = 'passenger'/>
                  <input type = 'submit' name = 'next_step' value = 'Etape suivante'/>";

        
        $_SESSION['client'] = serialize($new_client);
        $_SESSION['dest'] = serialize($information);
        include "./templates/passengers.php";
    }

    //If the 'cancel' button is pressed
    else if (isset($_GET['cancel'])) 
    {
        include "./templates/reservation.php";
    }

    //If not every parameter has been filled
    else 
    {
        $information = unserialize($_SESSION['dest']);
        $information->setSentence();
        $_SESSION['dest'] = serialize($information);
        include "./templates/reservation.php";
    }

?>