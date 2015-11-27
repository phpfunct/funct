<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringIsAlphaTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringIsAlphaTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringIsAlpha()
    {
        $out = [];

        $out[] = ['foo', true];
        $out[] = ['Foo', true];
        $out[] = ['fôõ', false];
        $out[] = ['f()°', false];
        $out[] = ['f00', false];
        $out[] = ['123', false];
        $out[] = ['1.23', false];

        return $out;
    }

    /**
     * @dataProvider dataStringIsAlpha
     *
     * @param string $input
     * @param bool $expected
     */
    public function testStringIsAlpha($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_is_alpha($input));
    }
}
