<?php

require_once 'Movable.php';
require_once 'Attackable.php';
require_once 'Combatable.php';

class Character implements Movable, Attackable, Combatable 
{
    public function move(): void 
    {
         echo "The character moves forward.\n";
    }

    public function attack(): void
    {
        echo "The character attacks with a sword.\n";
    }

    public function doCombat(): void 
    {
        $this->move();
        $this->attack();
    }
}