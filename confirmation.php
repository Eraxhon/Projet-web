<!DOCTYPE html>
<html lang='fr'>

  <head>
    
    <mega charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>CONFIRMATION</title>

  </head> <br><br>

  <body>

  	<h1> CONFIRMATION DES RESERVATIONS </h1>
	
	<div id="contenu">
	  Votre commande a bien ete enregistree. <br>
	  Merci de bien vouloir verser la somme de &#8364;<?php echo
	  ($new_client->getPrice($information->getInsurance())); ?> 
	  sur le compte 000-000000-00. <br><br>
	
      <form>
	  
	    <input type="hidden" value="validation">
	  
	    <input type="submit" name="back_home" value="Retour a la page d'acceuil"/>
	
	  </form>

	</div>

  </body>

</html>