<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringCamelizeTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class StringCamelizeTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringCamelize()
    {
        $out = [];

        $out[] = ['foo_bar', 'fooBar', false];
        $out[] = ['foo-bar', 'fooBar', false];
        $out[] = ['foo bar', 'fooBar', false];
        $out[] = ['foo1bar', 'foo1Bar', false];
        $out[] = ['FooBar', 'fooBar', false];
        $out[] = ['foo', 'foo', false];
        $out[] = ['a_', 'a', false];
        $out[] = ['a-', 'a', false];

        $out[] = ['foo_bar', 'FooBar', true];
        $out[] = ['foo-bar', 'FooBar', true];
        $out[] = ['foo bar', 'FooBar', true];
        $out[] = ['foo1bar', 'Foo1Bar', true];
        $out[] = ['FooBar', 'FooBar', true];
        $out[] = ['foo', 'Foo', true];
        $out[] = ['a_', 'A', true];
        $out[] = ['a-', 'A', true];

        return $out;
    }

    /**
     * @dataProvider dataStringCamelize
     *
     * @param string $input
     * @param string $expected
     * @param bool $uppercase
     */
    public function testStringCamelize($input, $expected, $uppercase)
    {
        $output = Funct\string_camelize($input, $uppercase);

        $this->assertEquals($expected, $output);
    }
}
