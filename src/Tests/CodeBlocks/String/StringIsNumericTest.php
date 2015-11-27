<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringIsNumericTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringIsNumericTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringIsNumeric()
    {
        $out = [];

        $out[] = ['foo', false];
        $out[] = ['Foo', false];
        $out[] = ['fôõ', false];
        $out[] = ['f()°', false];
        $out[] = ['f00', false];
        $out[] = ['123', true];
        $out[] = ['1.23', false];

        return $out;
    }

    /**
     * @dataProvider dataStringIsNumeric
     *
     * @param string $input
     * @param bool $expected
     */
    public function testStringIsNumeric($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_is_numeric($input));
    }
}
