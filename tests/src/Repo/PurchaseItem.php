<?php

namespace Harp\Money\Test\Repo;

use Harp\Harp\AbstractRepo;
use Harp\Money\Repo\CurrencyTrait;
use Harp\Money\Repo\FreezableValueTrait;

class PurchaseItem extends AbstractRepo
{
    use CurrencyTrait;
    use FreezableValueTrait;

    public static function newInstance()
    {
        return new PurchaseItem('Harp\Money\Test\Model\PurchaseItem');
    }

    public function initialize()
    {
        $this
            ->initializeCurrency()
            ->initializeFreezableValue();
    }
}
