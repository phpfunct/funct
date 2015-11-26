<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringChompRightTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringChompRightTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringChompRight()
    {
        $out = [];

        $out[] = ['foo', 'bar', 'foo'];
        $out[] = ['foo', 'foo', ''];
        $out[] = ['foo bar', 'foo', 'foo bar'];
        $out[] = ['foo bar', 'bar', 'foo '];

        return $out;
    }

    /**
     * @dataProvider dataStringChompRight
     *
     * @param string $input
     * @param string $suffix
     * @param string $expected
     */
    public function testStringChompRight($input, $suffix, $expected)
    {
        $this->assertEquals($expected, Funct\string_chomp_right($input, $suffix));
    }
}