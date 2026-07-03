<?php

class Athlete 
{
    public function __construct(
        private string $name,
        private string $country
    ){}

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }
}

?>