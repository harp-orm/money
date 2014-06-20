<?php

namespace Harp\Money\Repo;

use Harp\Money\AssertCurrency;
use Harp\Validate\Assert;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait ValueTrait
{
    abstract public function addAsserts(array $asserts);

    public function initializeValue()
    {
        $this
            ->addAsserts([
                new Assert\Present('value'),
                new Assert\Number('value'),
            ]);

        return $this;
    }
}
