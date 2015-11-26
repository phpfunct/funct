<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringIsAlphaNumericTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringIsAlphaNumericTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringIsAlphaNumeric()
    {
        $out = [];

        $out[] = ['foo', true];
        $out[] = ['Foo', true];
        $out[] = ['fôõ', false];
        $out[] = ['f()°', false];
        $out[] = ['f00', true];
        $out[] = ['123', true];
        $out[] = ['1.23', false];

        return $out;
    }

    /**
     * @dataProvider dataStringIsAlphaNumeric
     *
     * @param string $input
     * @param bool $expected
     */
    public function testStringIsAlphaNumeric($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_is_alpha_numeric($input));
    }
}
