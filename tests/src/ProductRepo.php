<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractRepo;
use Harp\Money\ValueRepoTrait;
use Harp\Money\CurrencyRepoTrait;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
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
