<?php
/* Concrete implementations of the factory and car */

class SedanFactory implements CarFactoryInterface
{
    public function makeCar()
    {
        return new Sedan();
    }
}