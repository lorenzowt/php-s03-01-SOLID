<?php
require_once 'Athlete.php';
require_once 'Event.php';
require_once 'Medal.php';

class Result 
{
    public function __construct(
        private Athlete $athlete,
        private Event $event,
        private Medal $medal,
    ){}

    public function getAthlete()
    {
        return $this->athlete;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getMedal()
    {
        return $this->medal;
    }
}

?>