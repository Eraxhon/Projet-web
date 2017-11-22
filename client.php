<?php

class new_client
{
	private $clients;
	private $number;
	private $sentence;

	public function __construct()
	{
    	$this->clients = array();
    	$this->number = 1;
    	$this->sentence = "";
	}

	public function add_client($firstName, $lastName, $age)
	{
		$new_client=array();
		$new_client[] = $this->number;
		$new_client[] = $firstName; //deuxième élément de la liste sera le prénom du client
		$new_client[] = $lastName; //troisième élément de la liste sera le nom de famille du client
		$new_client[] = $age;	//quatrième élément de la liste sera l'age du client
		$this->clients[] = $new_client; //met la liste des infos du client dans la liste this->client comme ca on aura une liste de listes avec 								comme premier élément "client 1" puis "client 2" puis "client 3"...
		$this->number = $this->number+1;
	}

	public function set_sentence()
	{
		$this->sentence = "Veuillez entrer tous les paramètres.";
	}

	public function get_sentence()
	{
		return $this->sentence;
	}

	public function get_client($num_client)
	{
		var_dump($this->clients[$num_client]); //accès à la liste des infos du client nr num_client
	}

	public function get_firstname($num_client)
	{
		var_dump($this->clients[$num_client][1]);
	}

	public function get_number()
	{
		return $this->number;
	}

//var_dump($nombres[1]); accès direct à l'élément en position 1
// print_r($nombres); affichage complet

}

?>