<?php $information=unserialize($_SESSION['dest']) ?>
<p>
        RESERVATION
        <br>
        <font color="red">
        <?php 
        echo($information->get_sentence());
        ?>
        </font>
        
        <br>

        Le prix de la place est de 10 euros jusqu'a 12 ans et puis 15 euros.

        <br><br>

        Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.
</p>

        <form method="get" action="index.php?page=controller_confirmation.php">

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


<?php $_SESSION['dest'] = serialize($information) ?>