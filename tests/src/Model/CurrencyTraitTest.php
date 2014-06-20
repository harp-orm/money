<?php

namespace Harp\Money\Test\Model;

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;
use Harp\Money\Test\AbstractTestCase;
/**
 * @coversDefaultClass Harp\Money\Model\CurrencyTrait
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
