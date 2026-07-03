<?php
require_once __DIR__ . '/classes/Ghost.php';
require_once __DIR__ . '/classes/Character.php';

$character = new Character();
$enemy = new Ghost();

function doCombat(Combatable $combatant)
{
    $combatant->doCombat();
}

doCombat($character);
doCombat($enemy);