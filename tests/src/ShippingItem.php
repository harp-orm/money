<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractModel;
use Harp\Money\FreezableTrait;

class ShippingItem extends AbstractModel
{
    const REPO = 'Harp\Money\Test\ShippingItemRepo';

    use FreezableTrait;

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
