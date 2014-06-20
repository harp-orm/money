<?php

namespace Harp\Money\Test\Repo;

use Harp\Money\Test\AbstractTestCase;
/**
 * @coversDefaultClass Harp\Money\Repo\ValueTrait
 */
class ValueTraitTest extends AbstractTestCase
{
    /**
     * @covers ::initializeValue
     */
    public function testTest()
    {
        $repo = Product::newInstance();
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
