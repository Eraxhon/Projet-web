<?php $information = unserialize($_SESSION['dest']) ?>

<!DOCTYPE html>
<html lang='fr'>
<head>
    <mega charset='UTF-8'>
    <link rel="stylesheet" type="text/css" href="reservationn.css">
    <title>RESERVATION</title>
    RESERVATION
<head>

<body>

        <br>
<div id="contenu">
        <h5> <?php echo($information->get_sentence())?> </h5>
        
        <br>

        <h6>
        Le prix de la place est de 10 euros jusqu'a 12 ans et puis 15 euros.

        <br><br>

        Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.

        <br><br>

        <form method="get" action="index.php?page=confirmation">

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