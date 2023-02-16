<?php
namespace App\Strategy\BehaviorsDuck;

use App\Strategy\Interfaces\QuackBehaviorInterface;


 class RocketQuack implements QuackBehaviorInterface
 {
    public function quackar()
    {
        echo 'HUAAAAAAAAAAAAAAaaaaaaaaaaaa'. PHP_EOL;
    }
 }
 