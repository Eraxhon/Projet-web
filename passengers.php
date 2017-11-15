<?php include "travel.php";
include "client.php"; ?>
<?php $information=unserialize($_SESSION['dest']) ?>
<?php $new_client=unserialize($_SESSION['client']) ?>

PASSAGER NUMERO <?php echo($information->get_places()); ?>

<?php echo($new_client->get_sentence()); ?>

<form method="get" action="index.php?page=controller_passenger.php">

    <p>Nom       <input type="text" name="firstName"/></p>
    <p>Prenom       <input type="text" name="lastName"/></p> 
    <p>Age       <input type="text" name="age"/></p> 


    <input type="submit" name="next_step" value="Etape suivante"/>

    </form>

<?php $_SESSION['dest'] = serialize($information) ?>
<?php $_SESSION['client'] = serialize($new_client) ?>