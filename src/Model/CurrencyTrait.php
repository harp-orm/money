<?php

namespace Harp\Money\Model;

use SebastianBergmann\Money\Currency;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait CurrencyTrait
{
    public $currency = 'GBP';

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return new Currency($this->currency);
    }

    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency->getCurrencyCode();

        return $this;
    }
}
