<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringEndsWithTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringEndsWithTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringEndsWith()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo', 'foo', true];
        $out[] = ['foo bar', 'foo', false];
        $out[] = ['foo bar', 'bar', true];

        return $out;
    }

    /**
     * @dataProvider dataStringEndsWith
     *
     * @param string $input
     * @param string $substring
     * @param string $expected
     */
    public function testStringEndsWith($input, $substring, $expected)
    {
        $this->assertEquals($expected, Funct\string_ends_with($input, $substring));
    }
}