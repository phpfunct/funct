<?php

namespace Funct\Tests\Strings;

use Funct\Strings;

/**
 * Class StringsSwapCase
 *
 * @package Funct\Tests\Strings
 * @author Rod Elias <rod@wgo.com.br>
*/
class StringsSwapCase extends \PHPUnit_Framework_TestCase
{
    public function dataStringSwapCase()
    {
        $out = [];

        $out[] = ['foo', false, 'FOO'];
        $out[] = ['bAr', false, 'BaR'];
        $out[] = ['FOO', false, 'foo'];
        $out[] = ['FoO', false, 'fOo'];
        $out[] = ['foo', true, 'FOO'];
        $out[] = ['bAr', true, 'BaR'];
        $out[] = ['FOO', true, 'foo'];
        $out[] = ['FoO', true, 'fOo'];

        return $out;
    }

    /**
     * @dataProvider dataStringSwapCase
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    public function testStringSwapCase($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\swapCase($input, $mb));
    }
}
