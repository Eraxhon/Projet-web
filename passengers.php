<!DOCTYPE html>
<html lang = 'fr'>

  <head>

  <title>PASSAGERS</title>
	<meta charset = "UTF-8">

	<link rel = "stylesheet" type = "text/css" href = "./css/test.css">

  </head> <br><br>

  <body style = "text-align: center;"> <br>

      <h1>

        <span class = "yellow">PASSAGER <?php print_r($number) ?>

      </h1>

      <h2>

        Veuillez entrer les coordonnées du passager <?php print_r($number) ?><br><br> Un age négatif sera automatiquement remplacé par sa valeur absolue.

      </h2>

      <h3>

  	    <?php
          echo($new_client->getError());
  	      echo($new_client->getSentence());
  	    ?>
  
      </h3>

    <form method = "get" action = "index.php">

        <p>

          Nom :       <input type = "text" name = "firstName" value = <?php print_r($firstname) ?>/> <br><br>

          Prenom :   <input type = "text" name = "lastName" value = <?php print_r($lastname) ?>/> <br><br>

          Age :       <input type = "number" name = "age"/> <br><br>

        </p>

      <?php echo "$button"?>

    </form>

  </body>