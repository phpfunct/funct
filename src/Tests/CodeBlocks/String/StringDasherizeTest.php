<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringDasherizeTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringDasherizeTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringDasherize()
    {
        $out = [];

        $out[] = [
            'a_farewell_to_arms',
            'a-farewell-to-arms'
        ];

        $out[] = [
            'capsLock',
            'caps-lock'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringDasherize
     */
    public function testStringDasherize($given, $expected)
    {
        $this->assertSame($expected, Funct\string_dasherize($given));
    }
}
