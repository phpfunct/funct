<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringPadRightTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringPadRightTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringPadRight()
    {
        $out = [];

        $out[] = ['foo', 0, ' ', 'foo'];
        $out[] = ['foo', 4, ' ', 'foo '];
        $out[] = ['foo', 6, '*', 'foo***'];
        $out[] = ['foo', 2, '_', 'foo'];
        $out[] = ['foo', -1, ' ', 'foo'];
        return $out;
    }

    /**
     * @dataProvider dataStringPadRight
     *
     * @param string $input
     * @param string $lenght
     * @param char   $char
     * @param string $expected
     */
    public function testStringPadRight($input, $lenght, $char, $expected)
    {
        $this->assertEquals($expected, Funct\string_pad_right($input, $lenght, $char));
    }
}
