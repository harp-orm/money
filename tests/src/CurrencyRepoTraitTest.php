<?php

namespace Harp\Money\Test;

/**
 * @coversDefaultClass Harp\Money\CurrencyRepoTrait
 */
class CurrencyRepoTraitTest extends AbstractTestCase
{
    /**
     * @covers ::initializeCurrency
     */
    public function testTest()
    {
        $repo = new ProductRepo();
        $repo->initialize();
        $product = $repo->newModel(['currency' => null]);

        $product->validate();

        $this->assertEquals(
            'currency must be present',
            $product->getErrors()->humanize()
        );

        $product->currency = '123';
        $product->validate();

        $this->assertEquals(
            'currency is invalid',
            $product->getErrors()->humanize()
        );
    }
}
