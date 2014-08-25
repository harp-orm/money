<?php

namespace Harp\Money\Test;

use SebastianBergmann\Money\Money;
use SebastianBergmann\Money\Currency;
use Harp\Money\MoneyObjects;

/**
 * @coversDefaultClass Harp\Money\MoneyObjects
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class MoneyObjectsTest extends AbstractTestCase
{
    /**
     * @covers ::sum
     */
    public function testSum()
    {
        $objects = [
            new Money(200, new Currency('EUR')),
            new Money(300, new Currency('EUR')),
            new Money(500, new Currency('EUR')),
        ];

        $result = MoneyObjects::sum($objects);

        $this->assertEquals(new Money(1000, new Currency('EUR')), $result);

        $result = MoneyObjects::sum([]);

        $this->assertEquals(new Money(0, new Currency('GBP')), $result);

        $objects = [
            new Money(200, new Currency('EUR')),
            new Money(300, new Currency('GBP')),
            new Money(500, new Currency('EUR')),
        ];

        $this->setExpectedException('SebastianBergmann\Money\CurrencyMismatchException');

        $result = MoneyObjects::sum($objects);
    }
}
