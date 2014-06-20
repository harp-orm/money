<?php

namespace Harp\Money\Test\Repo;

use Harp\Harp\AbstractRepo;
use Harp\Money\Repo\ValueTrait;
use Harp\Money\Repo\CurrencyTrait;

class Product extends AbstractRepo
{
    use CurrencyTrait;
    use ValueTrait;

    public static function newInstance()
    {
        return new Product('Harp\Money\Test\Model\Product');
    }

    public function initialize()
    {
        $this
            ->initializeCurrency()
            ->initializeValue();
    }
}
