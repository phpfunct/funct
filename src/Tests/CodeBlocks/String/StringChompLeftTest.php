<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringChompLeftTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Lucantis Swann <lucantis.swann@gmail.com>
*/
class StringChompLeftTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringChompLeft()
    {
        $out = [];

        $out[] = ['foo', 'bar', 'foo'];
        $out[] = ['foo', 'foo', ''];
        $out[] = ['foo bar', 'foo', ' bar'];
        $out[] = ['foo bar', 'bar', 'foo bar'];

        return $out;
    }

    /**
     * @dataProvider dataStringChompLeft
     *
     * @param string $input
     * @param string $prefix
     * @param string $expected
     */
    public function testStringChompLeft($input, $prefix, $expected)
    {
        $this->assertEquals($expected, Funct\string_chomp_left($input, $prefix));
    }
}