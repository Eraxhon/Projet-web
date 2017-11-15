<?php

class destination
{

private $destination;
private $places;
private $insurance;
private $sentence;

public function __construct()
{
    $this->destination = "";
    $this->places = 0;
    $this->insurance = false;
    $this->sentence = "";
}

public function get_insurance($insurance)
{
    return $this->insurance;
}

public function get_destination($destination)
{
    return $this->destination;
}

public function set_destination($destination)
{
        $this->destination = $destination;
}

public function set_places($places)
{
        $this->places = $places;
}

public function insurance_false()
{
    settype($insurance, "bool");
    $this->insurance = false;
}

public function insurance_true()
{
    settype($insurance, "bool");
    $this->insurance = true;
}

public function cancel()
{
    $this->destination = "";
    $this->places = 0;
    $this->insurance = false;
}

public function set_sentence()
{
    $this->sentence = "Veuillez entrer les champs destination et nombre de passagers.";
}

public function get_sentence()
{
    return $this->sentence;
    echo($this->sentence);
}


}