<?php //$information=unserialize($_SESSION['dest']);
include_once('client.php');
$new_client=unserialize($_SESSION['client']); ?>

PASSAGER <?php echo($new_client->get_number()); ?>

<br><br>

<?php echo($new_client->get_sentence()); ?>

<form method="get">

    <p>Nom       <input type="text" name="firstName"/></p>
    <p>Prenom    <input type="text" name="lastName"/></p> 
    <p>Age       <input type="text" name="age"/></p> 

	<input type="hidden" name="page" value="passenger"/>
    <input type="submit" name="next_step" value="Etape suivante"/>
</form>

<?php //$_SESSION['dest'] = serialize($information)
 $_SESSION['client'] = serialize($new_client) ?>