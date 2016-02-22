<?php

namespace Funct\Tests\Strings;

use Funct\Strings;

/**
 * Class StringsToUpperTest
 *
 * @package Funct\Tests\Strings
 * @author Rod Elias <rod@wgo.com.br>
*/
class StringsToUpperTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringToUpper()
    {
        $out = [];

        $out[] = ['foo', false, 'FOO'];
        $out[] = ['foo', true, 'FOO'];
        $out[] = ['bAr', false, 'BAR'];
        $out[] = ['bAr', true, 'BAR'];
        $out[] = ['FOO', false, 'FOO'];
        $out[] = ['FOO', true, 'FOO'];
        $out[] = ['ąčęėįšųūž', true, 'ĄČĘĖĮŠŲŪŽ'];

        return $out;
    }

    /**
     * @dataProvider dataStringToUpper
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    public function testStringToUpper($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\toUpper($input, $mb));
    }
}
