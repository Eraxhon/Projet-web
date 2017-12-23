<!DOCTYPE html>
<html lang='fr'>

  <head>
    
    <title>CONFIRMATION</title>
    <mega charset='UTF-8'>
    
    <link rel="stylesheet" type="text/css" href="./css/test.css">

  </head> <br><br>

  <body style="text-align: center;">

  	<h1> 

  	  <span class="yellow">CONFIRMATION DES RESERVATIONS</pan>

  	</h1>
	
	<h2>

	  Votre commande a bien ete enregistrée. <br><br>
	  Merci de bien vouloir verser la somme de &#8364;<?php echo
	  ($new_client->getPrice($information->getInsurance())); ?> 
	  sur le compte 000-000000-00. <br><br>

	</h2>
	
      <form>
	  
	    <input type="hidden" value="validation">
	  
	    <input type="submit" name="back_home" value="Retour a la page d'acceuil"/>
	
	  </form>

	</div>

  </body>

</html>