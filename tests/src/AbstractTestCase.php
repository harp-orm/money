<?php

namespace Harp\Money\Test;

use PHPUnit_Framework_TestCase;
use CL\CurrencyConvert\Converter;
use CL\CurrencyConvert\NullSource;


abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();

        Converter::initialize(new NullSource());
    }
}
