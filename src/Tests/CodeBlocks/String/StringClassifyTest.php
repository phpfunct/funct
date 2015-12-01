<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringClassifyTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringClassifyTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringClassify()
    {
        $out = [];

        $out[] = ['foo_bar', 'FooBar'];
        $out[] = ['foo-bar', 'FooBar'];
        $out[] = ['foo bar', 'FooBar'];
        $out[] = ['foo1bar', 'Foo1Bar'];
        $out[] = ['FooBar', 'FooBar'];
        $out[] = ['foo', 'Foo'];
        $out[] = ['a_', 'A'];
        $out[] = ['a-', 'A'];

        return $out;
    }

    /**
     * @dataProvider dataStringClassify
     *
     * @param string $input
     * @param string $expected
     */
    public function testStringClassify($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_classify($input));
    }
}
