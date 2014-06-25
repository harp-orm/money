<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractRepo;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class ShippingItemRepo extends AbstractRepo
{
    public function initialize()
    {
        $this
            ->setModelClass('Harp\Money\Test\ShippingItem');
    }
}
