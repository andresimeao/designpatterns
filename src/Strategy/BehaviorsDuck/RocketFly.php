<?php
namespace Andre\DesingPatterns\Strategy\BehaviorsDuck;

use Andre\DesingPatterns\Strategy\Interfaces\FlayBehaviorInterface;

class RocketFly implements FlayBehaviorInterface
{
    public function toFly()
    {
        echo 'Estou vondo com uma mochila a jato' . PHP_EOL;
    }
}
