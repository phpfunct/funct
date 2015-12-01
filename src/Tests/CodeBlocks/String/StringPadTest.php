<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringPadTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringPadTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringPad()
    {
        $out = [];

        $out[] = [['hello', 5], 'hello'];
        $out[] = [['hello', 10], '  hello   '];
        $out[] = [['hey', 7], '  hey  '];
        $out[] = [['hey', 5], ' hey '];
        $out[] = [['hey', 4], 'hey '];
        $out[] = [['hey', 7, '-'], '--hey--'];

        return $out;
    }

    /**
     * @dataProvider dataStringPad
     */
    public function testStringPad($given, $expected)
    {
        $this->assertSame($expected, call_user_func_array('Funct\CodeBlocks\string_pad', $given));
    }
}
