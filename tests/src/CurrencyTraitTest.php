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
}
