<?php 
namespace Andre\DesingPatterns\Decorator;

use Andre\DesingPatterns\Decorator\Interface\CofeInterface;

class CofeWithFareDecorator implements CofeInterface
{
    public function __construct(
        protected Cofe $cofe
    ) { }

    public function cost():float
    {
        return $this->cofe->cost() + 30;
    }
}
