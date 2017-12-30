<?php 
  $information = unserialize($_SESSION['dest']);
  $new_client = unserialize($_SESSION['client']); 
?>

<!DOCTYPE html>
<html lang='fr'>

  <head>

    <title>VALIDATION</title>
    <meta charset = 'UTF-8'>

    <link rel = "stylesheet" type = "text/css" media = "screen" href = "./css/test.css">
  
  </head> <br><br>

  <body>

    <h1>

      <span class = "yellow">VALIDATION DE LA RESERVATION</pan>

    </h1>

    <h2>

      Voici le résultat de votre réservation. Si vous êtes satisfaits, appuyez sur "Confirmer". <br><br> Vous pouvez aussi retourner à la page précédente ou à la page d'accueil.

    </h2>

    <table class = "container">

      <tbody>
        <tr> 

          <td>Destination</td> 
          <td> 
            <?php echo($information->getDestination()); ?> 
          </td>

        </tr>
        
        <tr> 

          <td>Nombre de places</td> 
          <td> 
            <?php echo($information->getPlaces()); ?> 
          </td>

        </tr>

        <tr>

          <?php
            for ($i = 0 ; $i < $information->getPlaces() ; $i++) 
            {
              print_r("<td>Nom</td> <td>");
              echo($new_client->getNames($i));
              print_r("</td><tr> <td>Age</td> <td>");
              echo($new_client->getAge($i));
              print_r("</td></tr>");
            }
          ?>
          </td>

        </tr>

        <tr>

          <td>Assurance annulation</td> 

          <td> 
            <?php 
              print_r($information->getInsurance()); 
            ?> 
          </td>

        </tr>

    <form class = "container1">
    
      <input type = "hidden" name = "page" value = "validation">
    <tr><td>
      <input type = "submit" name = "confirmation" value = "Confirmation"/>
    </td></tr><tr><td>
      <input type = "submit" name = "cancel" value = "Annuler la reservation"/>
    </td></tr><tr><td>
      <input type = "submit" name = "back" value = "Retour a la page precedente"/>
    </td></form>
  </tr>


</table>
  </body>

</html>

<?php 
  $_SESSION['dest'] = serialize($information);
  $_SESSION['client'] = serialize($new_client); 
?>