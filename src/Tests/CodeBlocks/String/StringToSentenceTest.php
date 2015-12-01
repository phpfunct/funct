<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringToSentenceTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringToSentenceTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringToSentence()
    {
        $out = [];

        $out[] = [
            [
                ['a', 'b', 'c'],
            ],
            'a, b and c'
        ];

        $out[] = [
            [
                ['a', 'b', 'c'],
                '# ',
                ' unt '
            ],
            'a# b unt c'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringToSentence
     */
    public function testStringToSentence($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\CodeBlocks\string_to_sentence', $given));
    }
}
