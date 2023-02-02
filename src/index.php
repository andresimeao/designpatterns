<?php
include "../vendor/autoload.php";

use Andre\DesingPatterns\Decorator\Cofe;
use Andre\DesingPatterns\Decorator\CofeWithFareDecorator;
use Andre\DesingPatterns\Strategy\Duck;
use Andre\DesingPatterns\Observer\Weather;
use Andre\DesingPatterns\Observer\BandNews;
use Andre\DesingPatterns\Observer\GloboNews;
use Andre\DesingPatterns\Observer\SbtReporter;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketFly;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RubberFly;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketQuack;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RubberQuack;

// factory

//runStrategy();
//runObserver();
runDecorator();

function runDecorator()
{
    $cofe = new Cofe();
    $cofe->qtt = 2;
    $cofe->value = 2.5;
    echo $cofe->cost();
    echo "</br>";
    $cofe = new CofeWithFareDecorator($cofe);
    echo $cofe->cost();
}

function runObserver()
{
    $weather = new Weather();

    $bandNews = new BandNews();
    $globoNews = new GloboNews();
    $sbtReporter = new SbtReporter();

    $weather->attach($bandNews);
    $weather->attach($globoNews);
    $weather->attach($sbtReporter);

    $weather->temperature = 20;
    $weather->notify();

    sleep(5);

    $weather->temperature = 50;
    $weather->notify();

}


function runStrategy()
{
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
}