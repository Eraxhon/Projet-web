si 0 places, envoyer à la vue qui dit qu'il faut mettre au moins une place
si 1 place, envoyer à la vue qui a une place
si deux places...

if (isset($_POST['places']==0)
{
include 'no_passenger.php';
include 'reservation.php';
}

else
{
include 'passengers.php';
}