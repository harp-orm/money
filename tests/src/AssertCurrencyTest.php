<?php

namespace Harp\Money\Test;

use Harp\Money\AssertCurrency;
use Harp\Validate\Test\AbstractTestCase;
use Harp\Validate\Error;
use stdClass;

/**
 * @coversDefaultClass Harp\Money\AssertCurrency
 */
class AssertCurrencyTest extends AbstractTestCase
{
    public function dataExecute()
    {
        return array(
            array('BGN', true),
            array('GBP', true),
            array('G31', 'test is invalid'),
            array('1', 'test is invalid'),
        );
    }

    /**
     * @dataProvider dataExecute
     * @covers ::execute
     */
    public function testExecute($value, $expected)
    {
        $assertion = new AssertCurrency('test');

        $this->assertAssertion($expected, $assertion, $value);
    }
}
