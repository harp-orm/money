<?php

namespace Harp\Money\Test;

use Harp\Money\FreezableValueTrait;
use Harp\Money\CurrencyTrait;
use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;


class PurchaseItem
{
    use CurrencyTrait;
    use FreezableValueTrait;

    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getSourceValue()
    {
        return $this->product->getValue();
    }

    public function getProduct()
    {
        return $this->product;
    }
}
