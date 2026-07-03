<?php
require_once 'Athlete.php';
require_once 'Event.php';
require_once 'Result.php';

class OlympicGame 
{
    private $athletes = [];
    private $events = [];
    private $results = [];

    public function registerAthlete(Athlete $athlete) 
    {
        $this->athletes[] = $athlete;
    }

    public function registerEvent(Event $event) 
    {
        $this->events[] = $event;
    }

    public function registerResult(Result $result) 
    {
        $this->results[] = $result;
    }

    public function findAthleteByName(string $name): Athlete
    {
        foreach($this->athletes as $athlete) {
            if ($athlete->getName() === $name) {
                return $athlete;
            }
        }
        throw new RuntimeException("Athlete $name not found");
    }

    public function findEventByName(string $name): Event
    {
        foreach($this->events as $event) {
            if ($event->getName() === $name) {
                return $event;
            }
        }
        throw new RuntimeException("Event $name not found");
    }

    public function getAthletes()
    {
        return $this->athletes;
    }


    public function getEvents()
    {
        return $this->events;
    }

    public function getResults()
    {
        return $this->results;
    }
}

?>
 