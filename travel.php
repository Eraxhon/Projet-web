<?php

class information
{

    private $destination;
    private $places;
    private $insurance;
    private $sentence;

    public function __construct()
    {
        $this->destination = "";
        $this->places = 0;
        $this->insurance = "NON";
        $this->sentence = "";
    }

    /*
    * Reserts the clients contact details
    */
    public function resetInformation()
    {
        $this->destination = "surprise";
        $this->places = 0;
        $this->insurance = "NON";
        $this->sentence = "";
    }

    public function getDestination()
    {
        return $this->destination;
    }

    public function setDestination($destination)
    {
            $this->destination = $destination;
    }

    public function setPlaces($places)
    {
            $this->places = $places;
    }

    public function getPlaces()
    {
        return $this->places;
    }

    /*
    * Assigns the string "NON" to $this->insurance
    */
    public function insuranceFalse()
    {
        $this->insurance = "NON";
    }

    /*
    * Assigns the string "OUI" to $this->insurance
    */
    public function insuranceTrue()
    {
        $this->insurance = "OUI";
    }

    public function getInsurance()
    {
        return $this->insurance;
    }

    public function cancel()
    {
        $this->destination = "";
        $this->places = 0;
        $this->insurance = false;
    }

    public function setSentence()
    {
        $this->sentence = "<br>Veuillez entrer un nombre de passagers.<br>";
    }

    public function getSentence()
    {
        return $this->sentence;
    }

}