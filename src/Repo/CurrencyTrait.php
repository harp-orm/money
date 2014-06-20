<?php

namespace Harp\Money\Repo;

use Harp\Money\AssertCurrency;
use Harp\Validate\Assert;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait CurrencyTrait
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
