<?php

namespace Harp\Money;

use CL\CurrencyConvert\Converter;
use Harp\Harp\Config;
use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;

/**
 * A combination of FreezableTrait and ValueTrait
 * Adds value and isFrozen properties
 * Adds present and number asserts on value property
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait FreezableValueTrait
{
    use FreezableTrait;
    use ValueTrait {
        ValueTrait::getValue as getFrozenValue;
    }

    public static function initialize(Config $config)
    {
        ValueTrait::initialize($config);
    }

    /**
     * @return Money
     */
    abstract public function getSourceValue();

    /**
     * @return Money
     */
    public function getValue()
    {
        return $this->isFrozen
            ? $this->getFrozenValue()
            : $this->getConvertedSourceValue();
    }

    /**
     * Converts the currency of "getSourceValue" if the currency is different
     * Uses Converter class
     *
     * @return Money
     */
    public function getConvertedSourceValue()
    {
        $currency = $this->getCurrency();
        $value = $this->getSourceValue();

        if ($currency != $value->getCurrency()) {
            $value = Converter::get()->convert($value, $currency);
        }

        return $value;
    }

    /**
     * @return static
     */
    public function freezeValue()
    {
        $this->setValue($this->getValue());
    }

    /**
     * @return static
     */
    public function unfreezeValue()
    {
        $this->value = 0;
    }

    /**
     * Implement FreezableTrait
     */
    public function performFreeze()
    {
        $this->freezeValue();
    }

    /**
     * Implement FreezableTrait
     */
    public function performUnfreeze()
    {
        $this->unfreezeValue();
    }
}
