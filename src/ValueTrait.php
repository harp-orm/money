<?php

namespace Harp\Money;

use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;
use Harp\Harp\Config;
use Harp\Validate\Assert;

/**
 * Adds value property
 * Adds present and number asserts on value property
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait ValueTrait
{
    public static function initialize(Config $config)
    {
        $config
            ->addAsserts([
                new Assert\Present('value'),
                new Assert\Number('value'),
            ]);
    }

    /**
     * @var integer
     */
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
        return new Money((int) $this->value, $this->getCurrency());
    }

    /**
     * @return static
     */
    public function setValue(Money $value)
    {
        $this->value = $value->getAmount();

        return $this;
    }
}
