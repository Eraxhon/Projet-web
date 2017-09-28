<?php
session_start();
// router


if (!empty($_GET['page']) && is_file('controler_'.$_GET['page'].'.php'))
{
include 'reservation.php';
}

elseif ($_GET['places'] == 0)
{
include 'no_passenger.php';
include 'reservation.php';
}

elseif (isset($_GET['place']))
{

if ($_GET['places']>0)
{
include 'reservation.php';
}

else
{
include 'annulation.php';
}

}

?>