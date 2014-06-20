<?php

namespace Harp\Money\Test\Repo;

use Harp\Money\Test\AbstractTestCase;
/**
 * @coversDefaultClass Harp\Money\Repo\FreezableValueTrait
 */
class FreezableValueTraitTest extends AbstractTestCase
{
    /**
     * @covers ::initializeFreezableValue
     */
    public function testTest()
    {
        $repo = PurchaseItem::newInstance();
        $repo->initialize();
        $purchaseItem = $repo->newModel(['value' => null]);

        $purchaseItem->validate();

        $this->assertEquals(
            'value must be present',
            $purchaseItem->getErrors()->humanize()
        );

        $purchaseItem->value = 'asd';
        $purchaseItem->validate();

        $this->assertEquals(
            'value is an invalid number',
            $purchaseItem->getErrors()->humanize()
        );
    }
}
