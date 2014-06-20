<?php

namespace Harp\Money\Test;

class DeliveryDaysSource
{
    protected $days;

    public function __construct($days)
    {
        $this->days = $days;
    }

    public function getDays()
    {
        return $this->days;
    }
}
