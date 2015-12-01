<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringLinesTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringLinesTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringLines()
    {
        $out = [];

        $out[] = [
            "My name is FooBar\nPHP is my favorite language\r\nWhat is your favorite language?",
            [
                'My name is FooBar',
                'PHP is my favorite language',
                'What is your favorite language?'
            ]
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringLines
     */
    public function testStringLines($given, $expected)
    {
        $this->assertSame($expected, Funct\string_lines($given));
    }
}
