<?php

namespace Harp\Money\Test;

use Harp\Money\ValueTrait;
use Harp\Money\CurrencyTrait;

class Product
{
    use CurrencyTrait;
    use ValueTrait;

    public function __construct(array $params = array())
    {
        foreach ($params as $name => $value) {
            $this->$name = $value;
        }
    }
}
