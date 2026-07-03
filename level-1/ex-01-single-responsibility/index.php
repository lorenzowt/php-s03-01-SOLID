<?php
require_once __DIR__ . '/classes/Athlete.php';
require_once __DIR__ . '/classes/Event.php';
require_once __DIR__ . '/classes/Result.php';
require_once __DIR__ . '/classes/Medal.php';
require_once __DIR__ . '/classes/OlympicGame.php';

$olympicGame = new OlympicGame;

$athletesData = [
    ['name' => 'Usain Bolt', 'country' => 'Jamaica'],
    ['name' => 'Michael Phelps', 'country' => 'USA']
];

$eventsData = [
    ['event' => '100m Sprint', 'date' => '2024-08-01'],
    ['event' => 'Swimming', 'date' => '2024-08-02']
];

$resultsData = [
    ['athlete' => 'Usain Bolt', 'event' => '100m Sprint', 'medal' => 'Gold'],
    ['athlete' => 'Michael Phelps', 'event' => 'Swimming', 'medal' => 'Gold']
];

foreach($athletesData as $athleteData) {
    $athlete = new Athlete($athleteData['name'], $athleteData['country']);
    $olympicGame->registerAthlete($athlete);
}

foreach($eventsData as $eventData) {
    $event = new Event($eventData['event'], $eventData['date']);
    $olympicGame->registerEvent($event);
}

foreach($resultsData as $resultData) {
    $athlete = $olympicGame->findAthleteByName($resultData['athlete']);
    $event = $olympicGame->findEventByName($resultData['event']);
    $medal = Medal::tryFrom($resultData['medal']);
    $result = new Result($athlete, $event, $medal);
    $olympicGame->registerResult($result);
}

echo "Olympic Games Resuls:\n";
foreach($olympicGame->getEvents() as $event) {
    echo "Event: " . $event->getName() . "on " . $event->getDate() . "\n";

    foreach($olympicGame->getResults() as $result) {
        if ($result->getEvent() === $event) {
            echo "- " . $result->getAthlete()->getName() . 
            " from " . $result->getAthlete()->getCountry() . 
            " won " . $result->getMedal()->value . "\n";
        }
    }
}
?>
