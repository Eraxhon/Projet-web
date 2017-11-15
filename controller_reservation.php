<?php
$_SESSION['dest']=unserialize($destination);
    var_dump($_POST);
if(isset($_POST['destination'])
{
    $destination = $_POST['destination'];
    settype($_POST['destination'], "string");
}

else()
{
    $destination->set_sentence();
}

if(isset($_POST['place']))
{
    $places = $_POST['place'];
    settype($_POST['place'], "integer");

    $destination->set_places($places);
}

else()
{
    $destination->set_sentence();

}

if(isset($_POST['insurance'])
{
    $destination->insurance_true();
}

else
{
    $destination->insurance_false();
}*/

$_SESSION['dest'] = serialise($destination);

include ('reservation.php')
include('passagers.php')

?>