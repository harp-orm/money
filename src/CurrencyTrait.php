<?php

namespace Harp\Money;

use SebastianBergmann\Money\Currency;
use Harp\Validate\Assert;
use Harp\Harp\Config;

/**
 * Adds "currency" property.
 * Adds present and currency asserts to currency
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait CurrencyTrait
{
    /**
     * Adds present and currency asserts to currency
     *
     * @param  Config $config
     */
    public static function initialize(Config $config)
    {
        $config
            ->addAsserts([
                new Assert\Present('currency'),
                new AssertCurrency('currency'),
            ]);
    }

    public $currency = 'GBP';

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return new Currency($this->currency);
    }

    /**
     * @param  Currency $currency
     * @return static
     */
    public function setCurrency(Currency $currency)
    {
        $this->currency = $currency->getCurrencyCode();

        return $this;
    }
}
