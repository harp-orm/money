<?php

namespace Harp\Money\Test\Repo;

use Harp\Money\Test\AbstractTestCase;
/**
 * @coversDefaultClass Harp\Money\Repo\CurrencyTrait
 */
class CurrencyTraitTest extends AbstractTestCase
{
    /**
     * @covers ::initializeCurrency
     */
    public function testTest()
    {
        $repo = Product::newInstance();
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
