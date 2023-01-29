<?php
include "../vendor/autoload.php";

use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketFly;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketQuack;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RubberFly;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RubberQuack;
use Andre\DesingPatterns\Strategy\Duck;

//começar amanha implementar o strategy, observer, decorator, factory

$duck = new Duck();
$duck->name = 'Pato do espaco';
$duck->setFly(new RocketFly);
$duck->setQuack(new RocketQuack);
echo 'ola meu nome e ' . $duck->name . PHP_EOL;
$duck->quackar();
$duck->tofly();

echo '</br>';

$duck->name = 'Pato de borracha';
$duck->setFly(new RubberFly);
$duck->setQuack(new RubberQuack);
echo 'ola meu nome e ' . $duck->name . PHP_EOL;
$duck->quackar();
$duck->tofly();
