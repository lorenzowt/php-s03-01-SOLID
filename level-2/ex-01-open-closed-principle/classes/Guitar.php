<?php

require_once 'Instrument.php';

class Guitar implements Instrument 
{
    public function play(): void 
    {
        echo "🎸 Strumming the guitar\n";
    }
}