<?php 
$information=unserialize($_SESSION['dest']);
?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <title>RESERVATION</title>

  </head>

  <body>

    <h1 style="text-align: center;">RESERVATION</h1> <br>

      <h5> <?php print_r($information->getSentence()) ?> </h5>

        <div id="contenu">

          <h6>

            Le prix de la place est de &#8364;10 jusqu'à 12 ans et puis &#8364;15.<br><br>
            Le prix de l'assurance annulation est de &#8364;20 quel que soit le nombre de 
            voyageurs.<br><br>

          </h6>
            
          <form method="get" action="index.php?page=confirmation">
            <table width="30%" border="1" cellspacing="1" cellpadding="10">
              <tr>
                <td>
                  <div>

                  
                    
                      Destination : 
                    
                      <select name="destination">
                    
                        <option value="Berlin">Berlin</option>
                    
                        <option value="Amsterdam">Amsterdam</option>
                    
                        <option value="Barcelone">Barcelone</option>
                    
                        <option value="Bruxelles">Bruxelles</option>
                    
                      </select> <br><br>

                      <p> 

                        Nombre de passagers : 
                        <input type="number" name="places" step="1" min="0" max="100"/> 

                      </p> <br>

                      <label for="case" name="cancel" checked="checked" >Assurance annulation</label>

                      <input type="checkbox" name="insurance" id="case" />
                  </div>
                </td>
              <tr>
            </table> <br><br>

            <input type="submit" name="next_step" value="Etape suivante"/>
  
            <input type="hidden" name="page" value="reservation">

            <input type="submit" name="cancel" value="Annuler la reservation"/>
            
          </form>

          </h6>

        </div>

  </body>

</html>

<?php
  $_SESSION["dest"]=serialize($information);
?>