<?php

namespace Harp\Money;

use Harp\Validate\Assert;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait ValueRepoTrait
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
