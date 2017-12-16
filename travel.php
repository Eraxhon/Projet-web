<?php

class information
{

private $destination;
private $places;
private $insurance;
private $sentence;
private $ID;

public function __construct()
{
    $this->destination = "";
    $this->places = 0;
    $this->insurance = "NON";
    $this->sentence = "";
    $this->ID = 1;
}

public function reset_information()
{
    $this->destination = "";
    $this->places = 0;
    $this->insurance = "NON";
    $this->sentence = "";
    $this->ID = 1;
}

public function get_insurance()
{
    return($this->insurance);
}

public function get_destination()
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

public function get_places()
{
    return $this->places;
}

public function insurance_false()
{
    $this->insurance = "NON";
}

public function insurance_true()
{
    $this->insurance = "OUI";
}

public function cancel()
{
    $this->destination = "";
    $this->places = 0;
    $this->insurance = false;
}

public function set_sentence()
{
    $this->sentence = "<br>Veuillez entrer un nombre de passagers.<br>";
}

public function get_sentence()
{
    return $this->sentence;
}

public function get_ID()
{
    return $this->ID;
}

public function incr_ID()
{
    $this->ID = $this->ID + 1;
}

}