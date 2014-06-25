<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractModel;
use Harp\Money\ValueTrait;
use Harp\Money\CurrencyTrait;

class Product extends AbstractModel
{
    const REPO = 'Harp\Money\Test\ProductRepo';

    use CurrencyTrait;
    use ValueTrait;
}
