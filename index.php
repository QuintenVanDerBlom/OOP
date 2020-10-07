<?php

require_once 'vendor/autoload.php';

use Opdracht3\Game;

$game1 = new Game('fifa21', 59.00, 21, 'voetbal spel', 10.00);

print "<pre>";
var_dump($game1);