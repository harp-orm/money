<?php

namespace Harp\Money\Test;

use PHPUnit_Framework_TestCase;
use Harp\Harp\Repo\Container;
use CL\CurrencyConvert\Converter;
use CL\CurrencyConvert\NullSource;

/**
 * @author    Ivan Kerin <ikerin@gmail.com>
 * @copyright 2014, Clippings Ltd.
 * @license   http://spdx.org/licenses/BSD-3-Clause
 */
abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        parent::setUp();

        Converter::initialize(new NullSource());
        Container::clear();
    }
}
