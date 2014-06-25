<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractRepo;
use Harp\Money\CurrencyRepoTrait;
use Harp\Money\FreezableValueRepoTrait;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
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
