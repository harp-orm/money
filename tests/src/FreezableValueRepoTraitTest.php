<?php

namespace Harp\Money\Test;

/**
 * @coversDefaultClass Harp\Money\FreezableValueRepoTrait
 */
class FreezableValueRepoTraitTest extends AbstractTestCase
{
    /**
     * @covers ::initializeFreezableValue
     */
    public function testTest()
    {
        $repo = new PurchaseItemRepo();
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
