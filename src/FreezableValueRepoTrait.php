<?php

namespace Harp\Money;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait FreezableValueRepoTrait
{
    use ValueRepoTrait;

    public function initializeFreezableValue()
    {
        $this
            ->initializeValue();

        return $this;
    }
}
