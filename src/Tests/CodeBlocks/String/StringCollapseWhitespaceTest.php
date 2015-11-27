<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringCollapseWhiteSpaceTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringCollapseWhiteSpaceTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringCollapseWhitespace()
    {
        $out = [];

        $out[] = ['foo   bar', 'foo bar'];
        $out[] = ['  foo bar   ', ' foo bar '];
        $out[] = ['foo   bar        ', 'foo bar '];

        return $out;
    }

    /**
     * @dataProvider dataStringCollapseWhiteSpace
     *
     * @param string $input
     * @param string $expected
     */
    public function testStringCollapseWhitespace($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_collapse_whitespace($input));
    }
}