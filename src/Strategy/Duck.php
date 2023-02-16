<?php
namespace App\Strategy;

use App\Strategy\Interfaces\FlayBehaviorInterface;
use App\Strategy\Interfaces\QuackBehaviorInterface;


class Duck
{
    public string $name;
    private QuackBehaviorInterface $quack;
    private FlayBehaviorInterface  $fly;

    public function setFly(FlayBehaviorInterface $flyBehavior)
    {
        $this->fly = $flyBehavior;
    }

    public function setQuack(QuackBehaviorInterface $quackBehavior)
    {
        $this->quack = $quackBehavior;
    }

    public function quackar()
    {
        $this->quack->quackar();
    }

    public function tofly()
    {
        $this->fly->toFly();
    }
}
