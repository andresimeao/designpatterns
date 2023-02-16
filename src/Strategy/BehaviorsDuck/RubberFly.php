<?php
namespace App\Strategy\BehaviorsDuck;

use App\Strategy\Interfaces\FlayBehaviorInterface;

class RubberFly implements FlayBehaviorInterface
{
    public function toFly()
    {
        echo 'Patinho de borracha nao pode voar =/'. PHP_EOL;
    }
}
