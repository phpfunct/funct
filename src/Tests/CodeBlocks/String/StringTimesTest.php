<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringTimesTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringTimesTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringTimes()
    {
        $out = [];

        $out[] = ['foo', 0, ''];
        $out[] = ['foo', 1, 'foo'];
        $out[] = ['foo', 3, 'foofoofoo'];

        return $out;
    }

    /**
     * @dataProvider dataStringTimes
     *
     * @param string $input
     * @param string $n
     * @param string $expected
     */
    public function testStringTimes($input, $n, $expected)
    {
        $this->assertEquals($expected, Funct\string_times($input, $n));
    }
}