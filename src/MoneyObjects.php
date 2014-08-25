<?php

namespace Harp\Money;

use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;

/**
 * Adds value property
 * Adds present and number asserts on value property
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class MoneyObjects
{
    /**
     * @param  Money[] $objects
     * @return Money
     */
    public static function sum(array $objects)
    {
        if ($objects) {
            $money = reset($objects);

            foreach (array_slice($objects, 1) as $object) {
                $money = $money->add($object);
            }

            return $money;
        } else {
            return new Money(0, new Currency('GBP'));
        }
    }
}
