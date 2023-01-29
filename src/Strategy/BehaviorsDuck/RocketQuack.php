<?php
namespace Andre\DesingPatterns\Strategy\BehaviorsDuck;

use Andre\DesingPatterns\Strategy\interfaces\QuackBehaviorInterface;

 class RocketQuack implements QuackBehaviorInterface
 {
    public function quackar()
    {
        echo 'HUAAAAAAAAAAAAAAaaaaaaaaaaaa'. PHP_EOL;
    }
 }
 