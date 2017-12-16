<?php 
  $information = unserialize($_SESSION['dest']);
  $new_client = unserialize($_SESSION['client']); 
?>

<!DOCTYPE html>
<html lang='fr'>

  <head>

    <meta charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>VALIDATION</title>

  <head> <br><br>

  <body>

    <h1>VALIDATION DES RESERVATIONS</h1>

    <table>

      <tr> 

        <td>Destination</td> 

        <td> 
          <?php 
            echo($information->getDestination()); 
          ?> 
        </td>

      </tr> <br>

      <tr> 

        <td>Nombre de places</td> 

        <td> 

          <?php 
            echo($information->getPlaces()); 
          ?> 

        </td>

      </tr> <br>

        <?php
          
          for ($i = 0 ; $i < $information->getPlaces() ; $i++) 
          {
        	print_r("<tr> <td>Nom</td> <td>");
            echo($new_client->getNames($i));
        	print_r("</td></tr><br><tr> <td>Age</td> <td>");
        	echo($new_client->getAge($i));
        	print_r("</td></tr>");
          }

        ?> <br>

      <tr>

        <td>Assurance annulation</td> 

        <td> 
          <?php 
            print_r($information->getInsurance()); 
          ?> 

        </td>

      </tr>
    
    </table> <br>

    <form>
    
      <input type="hidden" name="page" value="validation">
    
      <input type="submit" name="confirmation" value="Confirmation"/>
    
      <input type="submit" name="cancel" value="Annuler la reservation"/>
    
      <input type="submit" name="back" value="Retour a la page precedente"/>
    
    </form>

  </body>

</html>

<?php 
  $_SESSION['dest'] = serialize($information);
  $_SESSION['client'] = serialize($new_client); 
?>