<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractRepo;
use Harp\Money\ValueRepoTrait;
use Harp\Money\CurrencyRepoTrait;

class ProductRepo extends AbstractRepo
{
    use CurrencyRepoTrait;
    use ValueRepoTrait;

    public function initialize()
    {
        $this
            ->setModelClass('Harp\Money\Test\Product')
            ->initializeCurrency()
            ->initializeValue();
    }
}
