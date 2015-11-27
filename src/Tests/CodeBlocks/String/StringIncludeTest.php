<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringIncludeTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringIncludeTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringInclude()
    {
        $out = [];

        $out[] = ['foo', 'bar', false];
        $out[] = ['foo bar', 'bar', true];
        $out[] = ['foo bar', 'foo', true];
        $out[] = ['foo&%$bar@;/', 'bar', true];
        $out[] = ['foo BAR', 'bar', false];
        
        return $out;
    }

    /**
     * @dataProvider dataStringInclude
     *
     * @param string $input
     * @param string $substring
     * @param string $expected
     */
    public function testStringInclude($input, $substring, $expected)
    {
        $this->assertEquals($expected, Funct\string_include($input, $substring));
    }
}