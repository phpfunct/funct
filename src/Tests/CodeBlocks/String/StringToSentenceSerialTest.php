<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringToSentenceSerialTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringToSentenceSerialTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringToSentenceSerial()
    {
        $out = [];

        $out[] = [
            [
                ['a', 'b', 'c'],
            ],
            'a, b, and c'
        ];

        $out[] = [
            [
                ['a', 'b', 'c'],
                '# ',
                'unt '
            ],
            'a# b# unt c'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringToSentenceSerial
     */
    public function testStringToSentenceSerial($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\CodeBlocks\string_to_sentence_serial', $given));
    }
}
