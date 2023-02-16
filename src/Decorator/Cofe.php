<?php
namespace App\Decorator;

use App\Decorator\Interface\CofeInterface;

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