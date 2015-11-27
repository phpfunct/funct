<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringRepeatTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringRepeatTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringRepeat()
    {
        $out = [];

        $out[] = ['foo', 0, ''];
        $out[] = ['foo', 1, 'foo'];
        $out[] = ['foo', 3, 'foofoofoo'];

        return $out;
    }

    /**
     * @dataProvider dataStringRepeat
     *
     * @param string $input
     * @param int    $n
     * @param string $expected
     */
    public function testStringRepeat($input, $n, $expected)
    {
        $this->assertEquals($expected, Funct\string_repeat($input, $n));
    }
}