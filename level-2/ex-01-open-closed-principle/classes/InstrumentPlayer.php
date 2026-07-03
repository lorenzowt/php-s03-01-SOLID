<?php

require_once 'Drums.php';
require_once 'Guitar.php';
require_once 'Instrument.php';
require_once 'Piano.php';

class InstrumentPlayer 
{
    public function play(Instrument $instrument): void
    {
        $instrument->play();
    }
}