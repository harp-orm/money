<?php

namespace Harp\Money\Test;

use Harp\Harp\AbstractModel;
use Harp\Money\FreezableTrait;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class ShippingItem extends AbstractModel
{
    use FreezableTrait;

    public static function initialize($config)
    {
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
