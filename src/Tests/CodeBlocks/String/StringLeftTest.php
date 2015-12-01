<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringLeftTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringLeftTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringLeft()
    {
        $out = [];

        $out[] = [
            [
                'My name is FOOBAR',
                2
            ],
            'My'
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
                -6
            ],
            'FOOBAR'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringLeft
     */
    public function testStringLeft($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\CodeBlocks\string_left', $given));
    }
}
