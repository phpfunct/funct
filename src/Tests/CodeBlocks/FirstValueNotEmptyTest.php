<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class FirstValueNotEmptyTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FirstValueNotEmptyTest extends \PHPUnit_Framework_TestCase
{
    public function dataFirstValueNotEmpty()
    {
        $out = [];

        $out[] = [
            ['', 'Foo', 'bar'],
            'Foo'
        ];

        $out[] = [
            ['foo', 'bar'],
            'foo'
        ];

        $out[] = [
            ['', '', 'bar'],
            'bar'
        ];

        $out[] = [
            ['', '', ''],
            null
        ];

        return $out;
    }

    /**
     * @dataProvider dataFirstValueNotEmpty
     *
     * @param array  $arguments
     * @param string $expected
     */
    public function testFirstValueNotEmpty($arguments, $expected)
    {
        $output = call_user_func_array(
            'Funct\\CodeBlocks\\first_value_not_empty',
            $arguments
        );

        $this->assertEquals($expected, $output);
    }
}
