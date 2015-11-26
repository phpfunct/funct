<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringStartsWithTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringStartsWithTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringStartsWith()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo', 'foo', true];
        $out[] = ['foo bar', 'foo', true];
        $out[] = ['foo bar', 'bar', false];
        $out[] = [' foo', 'foo', false];


        return $out;
    }

    /**
     * @dataProvider dataStringStartsWith
     *
     * @param string $input
     * @param string $substring
     * @param bool   $expected
     */
    public function testStringStartsWith($input, $substring, $expected)
    {
        $this->assertEquals($expected, Funct\string_starts_with($input, $substring));
    }
}