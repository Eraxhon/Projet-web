<?php
include_once('client.php');
$new_client=unserialize($_SESSION['client']); ?>

<!DOCTYPE html>
<html lang='fr'>

<head>
	<meta charset="UTF-8">
	<title>	PASSAGERS</title>
	PASSAGER <?php echo($new_client->get_number()); ?>
	<link rel="stylesheet" type="text/css" href="passengerss.css">
</head>

<body>
<br><br>

<?php echo($new_client->get_sentence()); ?>

<form method="get">

    <p>Nom       <input type="text" name="firstName"/></p>
    <p>Prenom    <input type="text" name="lastName"/></p> 
    <p>Age       <input type="text" name="age"/></p> 

	<input type="hidden" name="page" value="passenger"/>
    <input type="submit" name="next_step" value="Etape suivante"/>
</form>

</body>

<?php $_SESSION['client'] = serialize($new_client) ?>