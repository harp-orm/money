<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractModel;
use Harp\Money\FreezableValueTrait;
use Harp\Money\CurrencyTrait;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class PurchaseItem extends AbstractModel
{
    const REPO = 'Harp\Money\Test\PurchaseItemRepo';

    use CurrencyTrait;
    use FreezableValueTrait;

    public $product;

    public function getSourceValue()
    {
        return $this->product->getValue();
    }

    public function getProduct()
    {
        return $this->product;
    }
}
