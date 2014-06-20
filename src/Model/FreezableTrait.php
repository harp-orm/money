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
trait FreezableTrait
{
    public $isFrozen = false;

    abstract public function performFreeze();
    abstract public function performUnfreeze();

    public function freeze()
    {
        if (! $this->isFrozen) {
            $this->performFreeze();
            $this->isFrozen = true;
        }

        return $this;
    }

    public function unfreeze()
    {
        if ($this->isFrozen) {
            $this->performUnfreeze();
            $this->isFrozen = false;
        }

        return $this;
    }
}
