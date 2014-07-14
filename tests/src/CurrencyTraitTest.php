<?php

namespace Harp\Money\Test;

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;

/**
 * @coversDefaultClass Harp\Money\CurrencyTrait
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
class CurrencyTraitTest extends AbstractTestCase
{
    /**
     * @covers ::getCurrency
     * @covers ::setCurrency
     */
    public function testTest()
    {
        $product = new Product();

        $this->assertEquals('GBP', $product->currency);

        $product->setCurrency(new Currency('BGN'));

        $this->assertEquals('BGN', $product->currency);
        $this->assertEquals(new Currency('BGN'), $product->getCurrency());
    }

    /**
     * @covers ::initialize
     */
    public function testInitialize()
    {
        $product = new Product(['currency' => null]);

        $product->validate();

        $this->assertEquals(
            'currency must be present',
            $product->getErrors()->humanize()
        );

        $product->currency = '123';
        $product->validate();

        $this->assertEquals(
            'currency is invalid',
            $product->getErrors()->humanize()
        );
    }
}
