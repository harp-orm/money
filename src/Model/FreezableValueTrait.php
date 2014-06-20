<?php

namespace Harp\Money\Model;

use CL\CurrencyConvert\Converter;
use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;

/**
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

    public function getConvertedSourceValue()
    {
        $currency = $this->getCurrency();
        $value = $this->getSourceValue();

        if ($currency != $value->getCurrency()) {
            $value = Converter::get()->convert($value, $currency);
        }

        return $value;
    }

    public function performFreeze()
    {
        $this->setValue($this->getValue());
    }

    public function performUnfreeze()
    {
        $this->value = 0;
    }
}
