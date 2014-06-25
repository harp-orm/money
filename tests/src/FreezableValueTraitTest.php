<?php

namespace Harp\Money\Test;

use SebastianBergmann\Money\Currency;
use SebastianBergmann\Money\Money;

/**
 * @coversDefaultClass Harp\Money\FreezableValueTrait
 */
class FreezableValueTraitTest extends AbstractTestCase
{
    /**
     * @covers ::getValue
     * @covers ::getConvertedSourceValue
     * @covers ::performFreeze
     * @covers ::performUnfreeze
     */
    public function testTest()
    {
        $product = new Product(['value' => 200]);
        $item = new PurchaseItem(['product' => $product]);

        $this->assertSame(0, $item->value);
        $item->getProduct()->value = 800;
        $this->assertEquals(new Money(800, new Currency('GBP')), $item->getValue());

        $item->freeze();

        $this->assertSame(800, $item->value);
        $this->assertEquals(new Money(800, new Currency('GBP')), $item->getValue());
        $item->getProduct()->value = 400;
        $item->getProduct()->currency = 'BGN';
        $this->assertEquals(new Money(800, new Currency('GBP')), $item->getValue());

        $item->unfreeze();

        $this->assertSame(0, $item->value);
        $this->assertEquals(new Money(400, new Currency('GBP')), $item->getValue());
    }
}