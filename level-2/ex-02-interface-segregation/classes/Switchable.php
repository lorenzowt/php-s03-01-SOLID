<?php

interface Switchable 
{
    public function turnOn(): void;
    public function turnOff(): void;
}