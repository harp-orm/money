<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractRepo;

class ShippingItemRepo extends AbstractRepo
{
    public function initialize()
    {
        $this
            ->setModelClass('Harp\Money\Test\ShippingItem');
    }
}
