<form method="post" action="passagers.php">

<p>
    RESERVATION <br>
    Le prix de la place est de 10 euros jusqu'à 12 ans et puis 15 euros.
<br>
    Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.
</p>


<select name="destination">
    <option value="Berlin">Berlin</option>
    <option value="Amsterdam">Amsterdam</option>
    <option value="Barcelone">Barcelone</option>
    <option value="Bruxelles">Bruxelles</option>
</select>

<br>
<br>

<input type="text" name="places" value="0"/>

<br><br>

<label for="case" name='annulation' checked = "checked" >Assurance annulation</label><input type="checkbox" name="assurance" id="case" />

<br><br>

<input type="submit" value="Etape suivante" name="passager"/>

</form>

<form method="post" action="annulation.php">
<input type="submit" value="Annuler la reservation" name='annuler'/>
</form>