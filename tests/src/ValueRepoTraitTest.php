<?php

namespace Harp\Money\Test;

/**
 * @coversDefaultClass Harp\Money\ValueRepoTrait
 */
class ValueRepoTraitTest extends AbstractTestCase
{
    /**
     * @covers ::initializeValue
     */
    public function testTest()
    {
        $repo = new ProductRepo();
        $repo->initialize();
        $product = $repo->newModel(['value' => null]);

        $product->validate();

        $this->assertEquals(
            'value must be present',
            $product->getErrors()->humanize()
        );

        $product->value = 'asd';
        $product->validate();

        $this->assertEquals(
            'value is an invalid number',
            $product->getErrors()->humanize()
        );
    }
}
