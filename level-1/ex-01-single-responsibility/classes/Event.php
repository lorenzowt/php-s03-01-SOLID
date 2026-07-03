<?php

class Event 
{
    public function __construct(
        private string $name,
        private string $date
    ){}

    public function getName()
    {
        return $this->name;
    }
    
    public function getDate()
    {
        return $this->date;
    }
}

?>