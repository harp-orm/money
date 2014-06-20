<?php

namespace Harp\Money\Test\Model;

use Harp\Harp\AbstractModel;
use Harp\Money\Test\Repo;
use Harp\Money\Model\ValueTrait;
use Harp\Money\Model\CurrencyTrait;

class Product extends AbstractModel
{
    use CurrencyTrait;
    use ValueTrait;

    public function getRepo()
    {
        return Repo\Product::get();
    }
}
