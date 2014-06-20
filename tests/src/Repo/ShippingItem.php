<?php

namespace Harp\Money\Test\Repo;

use Harp\Harp\AbstractRepo;

class ShippingItem extends AbstractRepo
{
    public static function newInstance()
    {
        return new ShippingItem('Harp\Money\Test\Model\ShippingItem');
    }

    public function initialize()
    {

    }
}
