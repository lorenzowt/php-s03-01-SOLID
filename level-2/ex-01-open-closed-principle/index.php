<?php

require_once __DIR__ . '/classes/Drums.php';
require_once __DIR__ . '/classes/Guitar.php';
require_once __DIR__ . '/classes/Instrument.php';
require_once __DIR__ . '/classes/Piano.php';
require_once __DIR__ . '/classes/InstrumentPlayer.php';

$player = new InstrumentPlayer();

$instruments = [
    new Guitar(),
    new Drums(),
    new Piano()
];

foreach($instruments as $instrument) {
    $player->play($instrument);
}
