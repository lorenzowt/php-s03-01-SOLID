<?php

require_once 'Instrument.php';

class Drums implements Instrument 
{
    public function play(): void 
    {
        echo "🥁 Beating the drums\n";
    }
}