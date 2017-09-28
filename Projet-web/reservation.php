VUE

<p>
        RESERVATION
        <br>
        Le prix de la place est de 10 euros jusqu'à 12 ans et puis 15 euros.
        <br>
        Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.

</p>

        <form method="get" action="index.php">
           <select name="destination">
                <option value="Berlin">Berlin</option>
                <option value="Amsterdam">Amsterdam</option>
                <option value="Barcelone">Barcelone</option>
                <option value="Bruxelles">Bruxelles</option>
            </select>
        </form>

        <br><br>

        <form method="get" action="index.php">
            <input type="text" name="places" value="0"/>
        </form>

        <br><br>

        <form method="get" action="index.php">
            <label for="case" name='annulation' checked = "checked" >Assurance annulation</label><input type="checkbox" name="assurance" id="case" />
        </form>

        <br><br>

        <form method="get" action="index.php">
            <input type="submit" value="Etape suivante"/>
        </form>

        <form method="post" action="index.php">
            <input type="submit" value="Annuler la reservation"/>
        </form>

		<input type="hidden" name="page" value="ctrlinfo">
