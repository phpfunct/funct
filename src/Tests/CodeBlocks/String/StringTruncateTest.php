<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringTruncateTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringTruncateTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringTruncate()
    {
        $out = [];

        $out[] = ['foo', 3, '…', 'foo' ];
        $out[] = ['foo bar', 3, '...', 'foo...' ];
        $out[] = ['foo bar', 5, '---', 'foo ---' ];

        return $out;
    }

    /**
     * @dataProvider dataStringTruncate
     *
     * @param string $input
     * @param string $length
     * @param string $chars
     * @param string $expected
     */
    public function testStringTruncate($input, $length, $chars, $expected)
    {
        $this->assertEquals($expected, Funct\string_truncate($input, $length, $chars));
    }
}