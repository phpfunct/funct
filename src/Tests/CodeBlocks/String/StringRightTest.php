<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringRightTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringRightTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringRight()
    {
        $out = [];

        $out[] = [
            [
                'My name is FOOBAR',
                6
            ],
            'FOOBAR'
        ];

        $out[] = [
            [
                'Hi',
                0
            ],
            ''
        ];

        $out[] = [
            [
                'My name is FOOBAR',
                -2
            ],
            'My'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringRight
     */
    public function testStringRight($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\CodeBlocks\string_right', $given));
    }
}
