<?php 
$information = unserialize($_SESSION['dest']);
$new_client = unserialize($_SESSION['client']); 
?>

<!DOCTYPE html>
<html lang = "fr">

  <head>

    <title>RESERVATION</title>
    <meta charset = "UTF-8">

    <link rel = "stylesheet" type="text/css" media="screen" href="./css/test.css">

  </head> <br><br>

  <body style = "text-align: center;">

    <h1>

      <span class = "yellow">RESERVATION</pan>

    </h1>

    <h2>

          Bienvenue sur votre site de réservation d'avion ! <br>Nous sommes ravis que vous ayez choisi notre companie. <br>Veuillez entrer les champs suivants afin de commencer votre réservation.<br><br> Ensuite, appuier sur "Etape suivante" pour enregistrer vos coordonnées.<br><br> Le prix de la place est de &#8364;10 jusqu'à 12 ans et puis &#8364;15.<br><br>
          Le prix de l'assurance annulation est de &#8364;20 quel que soit le nombre de 
          voyageurs.<br><br>

    </h2>

    <h3> 

      <?php 
        echo($information->getSentence());
       ?> 

    </h3>
    
      <form method = "get" action = "index.php?page=confirmation">
        <table align = "center" width = "30%" border = "1" cellspacing = "1" cellpadding = "10">
          <tr>
            <td>
              <div>
                
                  Destination : 
                
                  <select name = "destination">
                
                    <option value = "Berlin">Berlin</option>
                
                    <option value = "Amsterdam">Amsterdam</option>
                
                    <option value = "Barcelone">Barcelone</option>
                
                    <option value = "Bruxelles">Bruxelles</option>
                
                  </select> <br><br>

                  <p> 

                    Nombre de passagers : 
                    <input type = "number" name = "places" step = "1" min = "0" max = "100"/> 

                  </p> <br>

                  <label for = "case" name = "cancel" checked = "checked">Assurance annulation</label>

                  <input type = "checkbox" name = "insurance" id = "case" />
              </div>
            </td>
          <tr>
        </table> <br><br>

        <input type = "submit" name = "next_step" value = "Etape suivante"/>

        <input type = "hidden" name = "page" value = "reservation">

        <input type = "submit" name = "cancel" value = "Annuler la reservation"/>
        
      </form>

          </h6>

  </body>

</html>

<?php
  $_SESSION["dest"] = serialize($information);
  $_SESSION['client'] = serialize($new_client); 
?>