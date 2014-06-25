<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractModel;
use Harp\Money\ValueTrait;
use Harp\Money\CurrencyTrait;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class Product extends AbstractModel
{
    const REPO = 'Harp\Money\Test\ProductRepo';

    use CurrencyTrait;
    use ValueTrait;
}
