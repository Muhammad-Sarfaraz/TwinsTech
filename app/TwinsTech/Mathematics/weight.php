<?php

namespace TwinsTech\Mathematics;

class Weight
{
    private $kilograms;

    public static function fromKilograms($kilograms)
    {
        return new static($kilograms);
    }

    public function __construct($kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toLbs()
    {
        return $this->kilograms * 2.204623;
    }
}
