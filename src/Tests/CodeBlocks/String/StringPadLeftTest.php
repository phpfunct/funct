<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringPadLeftTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringPadLeftTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringPadLeft()
    {
        $out = [];

        $out[] = ['foo', 0, ' ', 'foo'];
        $out[] = ['foo', 4, ' ', ' foo'];
        $out[] = ['foo', 6, '*', '***foo'];
        $out[] = ['foo', 2, '_', 'foo'];
        $out[] = ['foo', -1, ' ', 'foo'];

        return $out;
    }

    /**
     * @dataProvider dataStringPadLeft
     *
     * @param string $input
     * @param string $lenght
     * @param char   $char
     * @param string $expected
     */
    public function testStringPadLeft($input, $lenght, $char, $expected)
    {
        $this->assertEquals($expected, Funct\string_pad_left($input, $lenght, $char));
    }
}