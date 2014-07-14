<?php

namespace Harp\Money;

use CL\CurrencyConvert\Converter;
use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;

/**
 * Adds isFrozen property
 * Requires performFreeze and performUnfreeze methods
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait FreezableTrait
{
    public $isFrozen = false;

    abstract public function performFreeze();
    abstract public function performUnfreeze();

    /**
     * Sets "isFrozen" and executes performFreeze
     *
     * @return static
     */
    public function freeze()
    {
        if (! $this->isFrozen) {
            $this->performFreeze();
            $this->isFrozen = true;
        }

        return $this;
    }

    /**
     * Unsets "isFrozen" and executes performUnfreeze
     *
     * @return static
     */
    public function unfreeze()
    {
        if ($this->isFrozen) {
            $this->performUnfreeze();
            $this->isFrozen = false;
        }

        return $this;
    }
}
