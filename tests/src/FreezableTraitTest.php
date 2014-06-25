<?php

namespace Harp\Money\Test;

/**
 * @coversDefaultClass Harp\Money\FreezableTrait
 */
class FreezableTraitTest extends AbstractTestCase
{
    /**
     * @covers ::freeze
     * @covers ::unfreeze
     */
    public function testTest()
    {
        $item = new ShippingItem(['sourceDays' => 8]);

        $this->assertSame(false, $item->isFrozen);
        $this->assertSame(0, $item->deliveryDays);
        $this->assertSame(8, $item->getDeliveryDays());

        $item->freeze();
        $item->freeze();

        $this->assertSame(true, $item->isFrozen);
        $this->assertSame(8, $item->deliveryDays);
        $this->assertSame(8, $item->getDeliveryDays());

        $item->unfreeze();
        $item->unfreeze();

        $this->assertSame(false, $item->isFrozen);
        $this->assertSame(0, $item->deliveryDays);
        $this->assertSame(8, $item->getDeliveryDays());
    }
}
