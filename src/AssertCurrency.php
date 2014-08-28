<?php

namespace Harp\Money;

use Harp\Validate\Assert\AbstractValueAssertion;
use SebastianBergmann\Money\Currency;
use InvalidArgumentException;

/**
 * Assert that the value is a valid iso currency code
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright (c) 2014 Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class AssertCurrency extends AbstractValueAssertion
{
    /**
     * @param  mixed $value
     * @return boolean
     */
    public function isValid($value)
    {
        try {
            new Currency($value);
            return true;
        } catch (InvalidArgumentException $e) {
            return false;
        }
    }
}
