<!DOCTYPE html>
<html lang='fr'>

<head>
    <mega charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="confirmation.css">
    <title>CONFIRMATION</title>
    CONFIRMATION DES RESERVATIONS
</head>

<br><br>

<body>
	Votre commande a bien ete enregistree.
	<br>
	Merci de bien vouloir verser la somme de &#8364;<?php echo($new_client->get_price($information->get_insurance())); ?> sur le compte 000-000000-00.
	<br><br>

	<form>
	<input type="hidden" value="validation">
	<input type="submit" name="back_home" value="Retour a la page d'acceuil"/>
	</form>
</body>

</html>