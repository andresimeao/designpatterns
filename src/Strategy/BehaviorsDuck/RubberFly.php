<?php
namespace Andre\DesingPatterns\Strategy\BehaviorsDuck;

use Andre\DesingPatterns\Strategy\interfaces\FlayBehaviorInterface;

class RubberFly implements FlayBehaviorInterface
{
    public function toFly()
    {
        echo 'Patinho de borracha nao pode voar =/'. PHP_EOL;
    }
}
