<?php

//Connection to the database

$servername="localhost";
$username="root";
$password="root";
$dbname="Reservations";

$conn = new mysqli($servername,$username, $password, $dbname);

if($conn->connect_error)
{
	die("Connection failed : ".$conn->connect_error);
}

	//Display of the table

	//Selection in the database

	$sql = "SELECT groupe.ID_groupe, groupe.Destination, groupe.Assurance, groupe.Prix, information.ID_pass, information.Noms, information.Age 
		FROM groupe
		INNER JOIN information
		WHERE information.ID_groupe=groupe.ID_groupe";

	$result=mysqli_query($conn, $sql);


	//Definition of the $table object that represents de table

	$table="<tr>";

	while ($info=$result->fetch_field())
	{
		$table.="<td>".$info->name."</td>";
	}

	$table.="<td>"."Editer"."</td>";
	$table.="<td>"."Supprimer"."</td>";
	$table.="</tr>";


	//Display the table

	$group_ID=0;

	while($line=$result->fetch_assoc())
	{

		$table.="<tr>";

			//If the group info has already been put in table

			if($line['ID_groupe']==$group_ID)
			{

			  foreach($line as $col_value)
			  {

				if($col_value==$line['ID_groupe'] || $col_value==$line['Destination'] || $col_value==$line['Assurance'] || $col_value==$line['Prix'] )
				{
					$table.="<td>".""."</td>";
				}

				else
				{
					$table.="<td>".$col_value."</td>";
				}

			  }

			}

			//If the info is from a new group
			else
			{

			  foreach($line as $col_value)
			  {

				$table.="<td>".$col_value."</td>";
				$group_ID=$line['ID_groupe'];

			  }				

			}


		$table.="
					<form method='get' action='controller_admin.php'>
					<input type='hidden' name='page' value='admin'><td>
					<input type='hidden' name='ID_pass' value='".$line['ID_pass']."'/>
					<input type='submit' name='edit' value='Editer'</td>
					<input type='submit' name='delete' value='Supprimer'</td>
					</form>";

		$table.="</tr>";
	}

	$conn->close();

	include('../templates/admin.php');

?>