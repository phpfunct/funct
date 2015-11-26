<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringBetweenTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringBetweenTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringBetween()
    {
        $out = [];

        $out[] = ['foo', '<test>', '</test>', ''];
        $out[] = ['<test>foo</test>', '<test>', '</test>', 'foo'];
        $out[] = ['foo <test>bar</test>', '<test>', '</test>', 'bar'];
        $out[] = ['foo<test></test>bar', '<test>', '</test>', ''];

        return $out;
    }

    /**
     * @dataProvider dataStringBetween
     *
     * @param string $input
     * @param string $left
     * @param string $right
     * @param string $expected
     */
    public function testStringBetween($input, $left, $right, $expected)
    {
        $this->assertEquals($expected, Funct\string_between($input, $left, $right));
    }
}