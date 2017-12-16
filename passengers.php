<?php
  include_once('client.php');
  $new_client = unserialize($_SESSION['client']); 
?>

<!DOCTYPE html>
<html lang='fr'>

  <head>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<title>	PASSAGERS</title>

  </head>

  <body> <br>

      <h1>PASSAGER <?php echo($new_client->getNumber()); ?></h1>

      <h5>

  	    <?php
  	      print_r($new_client->getSentence()) 
  	    ?>

        Veuillez entrer vos coordonnées. Un age négatif sera automatiquement 
        remplacé par ca valeur absolue.
  
      </h5>

    <form method="get">

        <p>

          Nom :       <input type="text" name="firstName"/> <br><br>

          Prenom :   <input type="text" name="lastName"/> <br><br>

          Age :       <input type="number" name="age"/> <br><br>

        </p>

	    <input type="hidden" name="page" value="passenger"/>
    
        <input type="submit" name="next_step" value="Etape suivante"/>

    </form>

  </body>

<?php 
  $_SESSION['client'] = serialize($new_client)
?>