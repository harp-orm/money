<?php

namespace Harp\Money\Test\Model;

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;
use Harp\Money\Test\AbstractTestCase;

/**
 * @coversDefaultClass Harp\Money\Model\ValueTrait
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
