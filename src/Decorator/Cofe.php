<?php
namespace Andre\DesingPatterns\Decorator;

use Andre\DesingPatterns\Decorator\Interface\CofeInterface;

class Cofe Implements CofeInterface
{
    public int $qtt;
    public float $value;
    public string $coffe;

    public function cost():float
    {
        return $this->qtt * $this->value;
    }
}