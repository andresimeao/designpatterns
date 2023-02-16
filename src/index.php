<?php
include "../vendor/autoload.php";

use App\Strategy\Duck;
use App\Decorator\Cofe;
use App\Observer\Weather;
use App\Observer\BandNews;
use App\Observer\GloboNews;
use App\Observer\SbtReporter;
use App\Decorator\CofeWithFareDecorator;
use App\Strategy\BehaviorsDuck\RubberFly;
use App\Strategy\BehaviorsDuck\RocketQuack;
use App\Strategy\BehaviorsDuck\RubberQuack;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketFly;



// factory

//runStrategy();
//runObserver();
runDecorator();

function runDecorator()
{
    $cofe = new Cofe();
    $cofe->qtt = 2;
    $cofe->value = 2.5;
    echo $cofe->cost() .  PHP_EOL;
    $cofe = new CofeWithFareDecorator($cofe);
    echo $cofe->cost() . PHP_EOL;
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