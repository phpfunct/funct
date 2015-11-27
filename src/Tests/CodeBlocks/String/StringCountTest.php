<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringCountTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringCountTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringCount()
    {
        $out = [];

        $out[] = ['foo', 'bar', 0];
        $out[] = ['foo', 'foo', 1];
        $out[] = ['foofoo', 'foo', 2];
        $out[] = ['bar foo bar foo', 'bar', 2];

        return $out;
    }

    /**
     * @dataProvider dataStringCount
     *
     * @param string $input
     * @param string $substring
     * @param int    $expected
     */
    public function testStringCount($input, $substring, $expected)
    {
        $this->assertEquals($expected, Funct\string_count($input, $substring));
    }
}