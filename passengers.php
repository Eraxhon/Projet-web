<?php
  include_once('client.php');
  $new_client=unserialize($_SESSION['client']); 
?>

<!DOCTYPE html>
<html lang='fr'>

  <head>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<title>	PASSAGERS</title>

  </head>

  <body style="text-align: center;"> <br>

      <h1>PASSAGER <?php echo($new_client->getNumber()); ?></h1>

      <div id="contenu">

        Veuillez entrer les coordonnées du passager nr <?php echo($new_client->getNumber()); ?>.<br> Un age négatif sera automatiquement remplacé par sa valeur absolue.

      </div>

      <h5>

  	    <?php
  	      echo($new_client->getSentence());
  	    ?>
  
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
  $_SESSION['client']=serialize($new_client)
?>