<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringContainsTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringContainsTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringContains()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo bar', 'bar', true];
        $out[] = ['foo bar', 'FOO', false];
        $out[] = ['*¤²foo&%$bar@;/', 'foo', true];

        return $out;
    }

    /**
     * @dataProvider dataStringContains
     *
     * @param string $input
     * @param string $substring
     * @param bool   $expected
     */
    public function testStringContains($input, $substring, $expected)
    {
        $this->assertEquals($expected, Funct\string_contains($input, $substring));
    }
}