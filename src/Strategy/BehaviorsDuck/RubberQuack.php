<?php
namespace Andre\DesingPatterns\Strategy\BehaviorsDuck;

use Andre\DesingPatterns\Strategy\interfaces\QuackBehaviorInterface;

class RubberQuack implements QuackBehaviorInterface
{
    public function quackar()
    {
        echo 'quackin quackin quackin quackin quackin'. PHP_EOL;
    }
}
