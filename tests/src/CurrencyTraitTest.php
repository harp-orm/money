<?php

namespace Harp\Money\Test;

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;

/**
 * @coversDefaultClass Harp\Money\CurrencyTrait
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
