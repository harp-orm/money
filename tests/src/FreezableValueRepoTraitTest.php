<?php

namespace Harp\Money\Test;

/**
 * @coversDefaultClass Harp\Money\FreezableValueRepoTrait
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
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
