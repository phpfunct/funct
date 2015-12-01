<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class FirstValueTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class FirstValueTest extends \PHPUnit_Framework_TestCase
{
    public function dataFirstValue()
    {
        $out = [];

        $out[] = [
            ['', 'Foo', 'bar'],
            ''
        ];

        $out[] = [
            ['foo', 'bar'],
            'foo'
        ];

        $out[] = [
            [null, null, 'bar'],
            'bar'
        ];

        $out[] = [
            [null],
            null
        ];

        return $out;
    }

    /**
     * @dataProvider dataFirstValue
     *
     * @param array  $arguments
     * @param string $expected
     */
    public function testFirstValue($arguments, $expected)
    {
        $output = call_user_func_array(
            'Funct\\CodeBlocks\\first_value',
            $arguments
        );

        $this->assertEquals($expected, $output);
    }
}
