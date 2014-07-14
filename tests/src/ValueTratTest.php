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

    /**
     * @covers ::initialize
     */
    public function testInitialize()
    {
        $product = new Product(['value' => null]);

        $product->validate();

        $this->assertEquals(
            'value must be present',
            $product->getErrors()->humanize()
        );

        $product->value = 'asd';
        $product->validate();

        $this->assertEquals(
            'value is an invalid number',
            $product->getErrors()->humanize()
        );
    }
}
