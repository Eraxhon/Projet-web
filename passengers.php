<?php //$information=unserialize($_SESSION['dest']);
include('client.php');
$new_client=unserialize($_SESSION['client']); ?>

PASSAGER <?php echo($new_client->get_number()); ?>

<br><br>

<?php echo($new_client->get_sentence()); ?>

<form method="get" action="index.php?page=passenger">

    <p>Nom       <input type="text" name="firstName"/></p>
    <p>Prenom    <input type="text" name="lastName"/></p> 
    <p>Age       <input type="text" name="age"/></p> 


    <input type="submit" name="next_step" value="Etape suivante"/>
</form>

<?php //$_SESSION['dest'] = serialize($information)
 $_SESSION['client'] = serialize($new_client) ?>