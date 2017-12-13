<?php $information = unserialize($_SESSION['dest']);
$new_client = unserialize($_SESSION['client']); ?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <mega charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="validation.css">
    <title>VALIDATION</title>
    VALIDATION DES RESERVATIONS
<head>

    <br><br>

<body>
<table> 

<tr> <td>Destination</td> <td> <?php echo($information->get_destination()); ?> </td></tr>
<br>
<tr> <td>Nombre de places</td> <td> <?php echo($information->get_places()); ?> </td></tr>
<br>

<?php
for ($i = 0 ; $i < $information->get_places() ; $i++)
	var_dump($new_client);
	echo("<br>");
	var_dump($i);

	print_r("<tr> <td>Nom</td> <td>");
    echo($new_client->get_names($i));
	print_r("</td></tr><br><tr> <td>Age</td> <td>");
	echo($new_client->get_age($i));
	print_r("</td></tr>");
?>

</table>        
</body>

</html>

<?php $_SESSION['dest'] = serialize($information);
$_SESSION['client'] = serialize($new_client) ?>