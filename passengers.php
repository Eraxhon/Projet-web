<?php
  include_once "client.php";
  $new_client = unserialize($_SESSION['client']); 
?>

<!DOCTYPE html>
<html lang = 'fr'>

  <head>

  <title>PASSAGERS</title>
	<meta charset = "UTF-8">

	<link rel = "stylesheet" type = "text/css" href = "./css/test.css">

  </head> <br><br>

  <body style = "text-align: center;"> <br>

      <h1>

        <span class = "yellow">PASSAGER <?php echo($new_client->getNumber()); ?>

      </h1>

      <h2>

        Veuillez entrer les coordonnées du passager nr <?php echo($new_client->getNumber()); ?>.<br><br> Un age négatif sera automatiquement remplacé par sa valeur absolue.

      </h2>

      <h3>

  	    <?php
          echo($new_client->getError());
  	      echo($new_client->getSentence());
  	    ?>
  
      </h3>

    <form method = "get">

        <p>

          Nom :       <input type = "text" name = "firstName"/> <br><br>

          Prenom :   <input type = "text" name = "lastName"/> <br><br>

          Age :       <input type = "number" name = "age"/> <br><br>

        </p>

	    <input type = "hidden" name = "page" value = "passenger"/>
    
      <input type = "submit" name = "next_step" value = "Etape suivante"/>

    </form>

  </body>

<?php 
  $_SESSION['client'] = serialize($new_client)
?>