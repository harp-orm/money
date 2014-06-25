<?php

namespace Harp\Money;

use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait ValueTrait
{
    public $value = 0;

    /**
     * @return Currency
     */
    abstract public function getCurrency();

    /**
     * @return Money
     */
    public function getValue()
    {
        return new Money($this->value, $this->getCurrency());
    }

    /**
     * @return self
     */
    public function setValue(Money $value)
    {
        $this->value = $value->getAmount();

        return $this;
    }
}
