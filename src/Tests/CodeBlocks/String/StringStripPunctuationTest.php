<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringStripPunctuationTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringStripPunctuationTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringStripPunctuation()
    {
        $out = [];

        $out[] = [
            'My, st[ring] *full* of %punct)',
            'My string full of punct'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringStripPunctuation
     */
    public function testStringStripPunctuation($given, $expected)
    {
        $this->assertSame($expected, Funct\string_strip_punctuation($given));
    }
}
