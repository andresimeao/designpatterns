<?php
include "../vendor/autoload.php";

use Andre\DesingPatterns\Strategy\Duck;
use Andre\DesingPatterns\Observer\Weather;
use Andre\DesingPatterns\Observer\BandNews;
use Andre\DesingPatterns\Observer\GloboNews;
use Andre\DesingPatterns\Observer\SbtReporter;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketFly;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RubberFly;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RocketQuack;
use Andre\DesingPatterns\Strategy\BehaviorsDuck\RubberQuack;

//começar amanha implementar, observer, decorator, factory

//runStrategy();
runObserver();

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