<?php

namespace Harp\Money\Repo;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
trait FreezableValueTrait
{
    use ValueTrait;

    public function initializeFreezableValue()
    {
        $this
            ->initializeValue();

        return $this;
    }
}
