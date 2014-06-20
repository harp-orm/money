<?php

namespace Harp\Money\Test\Model;

use Harp\Harp\AbstractModel;
use Harp\Money\Test\Repo;
use Harp\Money\Model\FreezableTrait;

class ShippingItem extends AbstractModel
{
    use FreezableTrait;

    public function getRepo()
    {
        return Repo\ShippingItem::get();
    }

    public $deliveryDays = 0;
    public $sourceDays = 0;

    public function getDeliveryDays()
    {
        if ($this->isFrozen) {
            return $this->deliveryDays;
        } else {
            return $this->sourceDays;
        }
    }

    public function performFreeze()
    {
        $this->deliveryDays = $this->sourceDays;
    }

    public function performUnfreeze()
    {
        $this->deliveryDays = 0;
    }
}
