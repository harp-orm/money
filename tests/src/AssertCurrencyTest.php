<?php

namespace Harp\Money\Test;

use Harp\Money\AssertCurrency;

/**
 * @coversDefaultClass Harp\Money\AssertCurrency
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class AssertCurrencyTest extends AbstractTestCase
{
    public function dataIsValid()
    {
        return array(
            array('BGN', true),
            array('GBP', true),
            array('G31', false),
            array('1', false),
        );
    }

    /**
     * @dataProvider dataIsValid
     * @covers ::isValid
     */
    public function testIsValid($value, $expected)
    {
        $assertion = new AssertCurrency('test');

        $this->assertEquals($expected, $assertion->isValid($value));
    }
}
