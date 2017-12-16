<?php $information = unserialize($_SESSION['dest']) ?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="reservationn.css">
    <title style="text-align:center;">RESERVATION</title>
    RESERVATION
</head>

<body>

        <br>
    <div id="contenu">
        <h5> <?php echo($information->get_sentence())?> </h5>
        
        <br>

        <h6>
        Le prix de la place est de &#8364;10 jusqu'à 12 ans et puis &#8364;15.

        <br><br>

        Le prix de l'assurance annulation est de &#8364;20 quel que soit le nombre de voyageurs.

        <br><br>
        <table width="30%" border ="1" cellspacing="1" cellpadding="10">
            <tr><td><div>

        <form method="get" action="index.php?page=confirmation">

           Destination : 
           <select name="destination">
                <option value="Berlin">Berlin</option>
                <option value="Amsterdam">Amsterdam</option>
                <option value="Barcelone">Barcelone</option>
                <option value="Bruxelles">Bruxelles</option>
            </select>

        <br><br>
        
        <p> Nombre de passagers : <input type="text" name="places"/> </p>

        <br>

            <label for="case" name='cancel' checked = "checked" >Assurance annulation</label><input type="checkbox" name="insurance" id="case" />
            </div></td><tr></table>

        <br><br>

            <input type="submit" name="next_step" value="Etape suivante"/>
            <input type="hidden" name="page" value="reservation">

            <input type="submit" name="cancel" value="Annuler la reservation"/>
        </form>
        </h6>
    </div>

</body>

</html>

<?php $_SESSION['dest'] = serialize($information) ?>