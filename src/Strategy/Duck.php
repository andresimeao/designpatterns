<?php
namespace Andre\DesingPatterns\Strategy;

use Andre\DesingPatterns\Strategy\Interfaces\FlayBehaviorInterface;
use Andre\DesingPatterns\Strategy\Interfaces\QuackBehaviorInterface;

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
