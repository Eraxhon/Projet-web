<?php

class new_client
{
	private $clients;
	private $number;
	private $sentence;
	private $price;
	private $error;

	public function __construct()
	{
    	$this->clients = array();
    	$this->number = 1;
    	$this->sentence = "";
    	$this->price = 0;
    	$this->error = "";
	}

	/**
	* Adds an array new_client[] in the array clients for each new client + increments the variable number with 1
	*/
	public function addClient($firstName, $lastName, $age)
	{
		$new_client = array();
		$new_client[] = $firstName;
		$new_client[] = $lastName;
		$new_client[] = $age;
		$this->clients[] = $new_client;
		$this->number = $this->number + 1;
	}

	public function getClients()
	{
		return $this->clients;
	}

	public function setMinorError()
	{
		$this->error = "Un des passagers doit être majeur. Veuillez entrer ses coordonnées en premier lieu. <br><br>";
	}

	public function getError()
	{
		return $this->error;
	}

	/*
	* Calculates the price of the travel looking at the customers ages and the insurance
	* @return the price (int)
	*/
	public function getPrice($insurance)
	{
		$total = 0;
		for ($i = 0 ; $i < count($this->clients) ; $i++)
		{
			if($this->clients[$i][2] <= 12)
			{
				$total += 10;
			}

			else
			{
				$total += 15;
			}
		}

		if($insurance == "OUI")
			{
				$total += 20;
			}

		$total += 0;
		$this->price = $total;
		return $total;
	}

	public function getTotal()
	{
		return $this->price;
	}

	/*
	* Reserts the clients contact details
	*/
	public function resetClient()
	{
		$this->clients = array();
    	$this->number = 1;
    	$this->sentence = "";
    	$this->ID = 1;
	}

	public function setSentence()
	{
		$this->sentence = "Veuillez entrer tous les paramètres.";
	}

	public function getSentence()
	{
		print_r($this->sentence);
	}

	public function getNumber()
	{
		return $this->number;
	}

	/*
	* Catch the firstname and lastname for the $i person
	* @param int $i the customer
	* @return "firstname lastname"
	*/
	public function getNames($i)
	{
		$output = $this->clients[$i][0]." ".$this->clients[$i][1];
		return $output;
	}

	/*
	* Catch the age of the $i person
	* @param int $i the customer
	* @return "firstname lastname"
	*/
	public function getAge($i)
	{
		$output = $this->clients[$i][2];
		return $output;
	}

	public function sizeClient()
	{
		return count($this->clients);
	}
}
?>