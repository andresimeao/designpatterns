<?php
namespace App\Strategy\BehaviorsDuck;

use App\Strategy\Interfaces\QuackBehaviorInterface;

class RubberQuack implements QuackBehaviorInterface
{
    public function quackar()
    {
        echo 'quackin quackin quackin quackin quackin'. PHP_EOL;
    }
}
