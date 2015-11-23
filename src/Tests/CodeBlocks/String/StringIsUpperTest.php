<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringIsUpperTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Ernestas Kvedaras <kvedaras.ernestas@gmail.com>
*/
class StringIsUpperTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringIsUpper()
    {
        $out = [];

        $out[] = ['foo', false, false];
        $out[] = ['foo', true, false];
        $out[] = ['fOO', false, false];
        $out[] = ['fOO', true, false];
        $out[] = ['Foo', false, false];
        $out[] = ['Foo', true, false];
        $out[] = ['FOO', false, true];
        $out[] = ['FOO', true, true];
        $out[] = ['foo1', false, false];
        $out[] = ['foo1', true, false];
        $out[] = ['Foo1', false, false];
        $out[] = ['Foo1', true, false];
        $out[] = ['FOO1', false, true];
        $out[] = ['FOO1', true, true];
        $out[] = ['111', false, true];
        $out[] = ['111', true, true];
        $out[] = ['ąčęėįšųūž', false, true];
        $out[] = ['ąčęėįšųūž', true, false];
        $out[] = ['ĄČĘĖĮŠŲŪŽ', false, true];
        $out[] = ['ĄČĘĖĮŠŲŪŽ', true, true];

        return $out;
    }

    /**
     * @dataProvider dataStringIsUpper
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    public function testStringIsUpper($input, $mb, $expected)
    {
        $this->assertEquals($expected, Funct\string_is_upper($input, $mb));
    }
}
