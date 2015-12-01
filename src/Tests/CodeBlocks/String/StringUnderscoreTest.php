<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringUnderscoreTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringUnderscoreTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringUnderscore()
    {
        $out = [];

        $out[] = [
            'a-farewell-to-arms',
            'a_farewell_to_arms'
        ];

        $out[] = [
            'capsLock',
            'caps_lock'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringUnderscore
     */
    public function testStringUnderscore($given, $expected)
    {
        $this->assertSame($expected, Funct\string_underscore($given));
    }
}
