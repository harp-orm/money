<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractRepo;
use Harp\Money\CurrencyRepoTrait;
use Harp\Money\FreezableValueRepoTrait;

class PurchaseItemRepo extends AbstractRepo
{
    use CurrencyRepoTrait;
    use FreezableValueRepoTrait;

    public function initialize()
    {
        $this
            ->setModelClass('Harp\Money\Test\PurchaseItem')
            ->initializeCurrency()
            ->initializeFreezableValue();
    }
}
