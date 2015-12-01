<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringTitleizeTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringTitleizeTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringTitleize()
    {
        $out = [];

        $out[] = [
            'man from the boondocks',
            'Man From The Boondocks'
        ];

        $out[] = [
            'x-men: the last stand',
            'X Men: The Last Stand'
        ];

        $out[] = [
            'TheManWithoutAPast',
            'The Man Without A Past'
        ];

        $out[] = [
            'raiders_of_the_lost_ark',
            'Raiders of the Lost Ark',
            ['of', 'the']
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringTitleize
     */
    public function testStringTitleize($given, $expected, array $ignored = [])
    {
        $this->assertSame($expected, Funct\string_titleize($given, $ignored));
    }
}
