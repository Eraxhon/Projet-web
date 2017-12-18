<?php

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Reservations";

	$conn = new mysqli($servername,$username, $password, $dbname);

	if($conn->connect_error)
	{
		die("Connection failed : ".$conn->connect_error);
	}

	//Select all from 'groupe' table
	$query = "SELECT * FROM groupe";

	$result = $conn->query($query) or die("Query1 failed ");

	if ($result->num_rows == 0) 
	{
		echo "Aucune ligne trouvée, rien à afficher."; exit;
	}

	//Select all from 'information' table
	$query = "SELECT * FROM information";

	$result = $conn->query($query) or die("Query2 failed ");

	if ($result->num_rows == 0) 
	{
		echo "Aucune ligne trouvée, rien à afficher."; exit;
	}

	// Affichage des entêtes de colonnes
	echo "<table>\n<tr>";
	while ($finfo = $result->fetch_field())
	{ echo '<th>'. $finfo->name .'</th>'; } echo "</tr>\n";

	// Afficher des résultats en HTML
	while ($line = $result->fetch_assoc()) { echo "\t<tr>\n";
	foreach ($line as $col_value) {
	echo "\t\t<td>$col_value</td>\n"; }
	echo "\t</tr>\n"; }
	echo "</table>\n";
	// Récupération du résultat sous forme d'un tableau associatif
	$result = $conn->query($query) or die("Query failed"); 
	while ($line = $result->fetch_array(ID_groupe))
	{
	echo $line['lastname'].'<BR>'; 
	}
?>