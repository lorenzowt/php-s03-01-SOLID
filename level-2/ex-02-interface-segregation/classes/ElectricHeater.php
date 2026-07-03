<?php

require_once 'Switchable.php';
require_once 'Heatable.php';

class ElectricHeater implements Switchable, Heatable
{
    public function turnOn(): void
    {
        echo "Heater on\n";
    }

    public function turnOff(): void
    {
        echo "Heater off\n";
    }

    public function heat(): void
    {
        echo "Heating the room\n";
    }
    
}