<?php

namespace Harp\Money;

use Harp\Validate\Assert;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait CurrencyRepoTrait
{
    abstract public function addAsserts(array $asserts);

    public function initializeCurrency()
    {
        $this
            ->addAsserts([
                new Assert\Present('currency'),
                new AssertCurrency('currency'),
            ]);

        return $this;
    }
}
