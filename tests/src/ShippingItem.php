<?php

namespace Harp\Money\Test;

use Harp\Money\FreezableTrait;

class ShippingItem
{
    use FreezableTrait;

    public $deliveryDays = 0;
    public $deliveryDaysSource;

    public function __construct(DeliveryDaysSource $source)
    {
        $this->deliveryDaysSource = $source;
    }

    public function getDeliveryDays()
    {
        if ($this->isFrozen) {
            return $this->deliveryDays;
        } else {
            return $this->deliveryDaysSource->getDays();
        }
    }

    public function performFreeze()
    {
        $this->deliveryDays = $this->deliveryDaysSource->getDays();
    }

    public function performUnfreeze()
    {
        $this->deliveryDays = 0;
    }
}
