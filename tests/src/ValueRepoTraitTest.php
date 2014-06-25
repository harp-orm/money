<?php

namespace Harp\Money\Test;

/**
 * @coversDefaultClass Harp\Money\ValueRepoTrait
 *
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
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
