<?php

require_once 'Movable.php';
require_once 'Combatable.php';

class Ghost implements Movable, Combatable 
{
    public function move(): void 
    {
        echo "The ghost floats silently.\n";
    }

    public function doCombat(): void 
    {
        $this->move();
    }
}