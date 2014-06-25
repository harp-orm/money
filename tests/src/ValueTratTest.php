<?php

namespace Harp\Money\Test;

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;

/**
 * @coversDefaultClass Harp\Money\ValueTrait
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class ValueTraitTest extends AbstractTestCase
{
    /**
     * @covers ::getValue
     * @covers ::setValue
     */
    public function testTest()
    {
        $product = new Product();

        $this->assertSame(0, $product->value);

        $product->setValue(new Money(200, new Currency('GBP')));

        $this->assertEquals(200, $product->value);
        $this->assertEquals(new Money(200, new Currency('GBP')), $product->getValue());
    }
}
