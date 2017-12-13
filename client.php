<?php

class new_client
{
	private $clients;
	private $number;
	private $sentence;
	private $ID;

	public function __construct()
	{
    	$this->clients = array();
    	$this->number = 1;
    	$this->sentence = "";
    	$this->ID = 1;
	}

	public function add_client($firstName, $lastName, $age)
	{
		$new_client = array();			//création d'un tableau
		$new_client[] = $this->ID;			//premier élément de la table sera l'ID de la réservation
		$new_client[] = $firstName; 	//deuxième élément de la table sera le prénom du client
		$new_client[] = $lastName; 		//troisième élément de la table sera le nom de famille du client
		$new_client[] = $age;			//quatrième élément de la table sera l'age du client
		$this->clients[] = $new_client; //met la liste des infos du client dans la liste this->client comme ca on aura une table de table avec 								comme premier élément "client 1" puis "client 2" puis "client 3"...
		$this->number = $this->number + 1;
	}

	public function set_sentence()
	{
		$this->sentence = "Veuillez entrer tous les paramètres.";
	}

	public function get_sentence()
	{
		return $this->sentence;
	}

	public function size_client()
	{
		return count($this->clients);
	}

	public function get_number()
	{
		return $this->number;
	}

	public function get_names($i)
	{
		//print_r($i);
		print_r($this->clients[$i][1]);
		print_r(" ");
		print_r($this->clients[$i][2]);
		print_r("<br>");
		//print_r($this->clients);
		//return $this->clients[$chiffre[3]] + $this->clients[$chiffre[4]]; // va dans le "chiffre"tième élément (le numerotième client) et prend les éléments 3 et 4 qui sont le prénom et le com des clients
	}

	public function get_ID() //utilisé?
	{
	    return $this->ID;
	}

	public function incr_ID()
	{
	    $this->ID = $this->ID + 1;
	}
//var_dump($nombres[1]); accès direct à l'élément en position 1
// print_r($nombres); affichage complet

}
?>