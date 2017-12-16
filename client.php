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

	/*
	* Calculates the price of the travel looking at the customers ages and the insurance
	* @return the price (int)
	*/
	public function getPrice($insurance)
	{
		$price = 0;
		for ($i = 0 ; $i < count($this->clients) ; $i++)
		{
			if($this->clients[$i][3] <= 12)
			{
				$price += 10;
			}

			else
			{
				$price += 15;
			}
		}

		if($insurance == "OUI")
			{
				$price += 20;
			}

		$price += 0;
		return $price;
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
	* Catch the firstname and lastname for each $i
	* @param int $i the customer
	* @return "firstname lastname"
	*/
	public function getNames($i)
	{
		print_r($this->clients[$i][0]);
		print_r(" ");
		print_r($this->clients[$i][1]);
		print_r("<br>");
	}

	/*
	* Catch the age of each $i
	* @param int $i the customer
	* @return "firstname lastname"
	*/
	public function getAge($i)
	{
		print_r($this->clients[$i][2]);
	}

	public function sizeClient()
	{
		return count($this->clients);
	}
}
?>