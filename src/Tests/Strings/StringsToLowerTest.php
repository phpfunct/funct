<?php

namespace Funct\Tests\Strings;

use Funct\Strings;

/**
 * Class StringsToLowerTest
 *
 * @package Funct\Tests\Strings
 * @author Rod Elias <rod@wgo.com.br>
*/
class StringsToLowerTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringToLower()
    {
        $out = [];

        $out[] = ['FOO', false, 'foo'];
        $out[] = ['FOO', true, 'foo'];
        $out[] = ['bAr', false, 'bar'];
        $out[] = ['bAr', true, 'bar'];
        $out[] = ['foo', false, 'foo'];
        $out[] = ['foo', true, 'foo'];
        $out[] = ['ĄČĘĖĮŠŲŪŽ', true, 'ąčęėįšųūž'];

        return $out;
    }

    /**
     * @dataProvider dataStringToLower
     *
     * @param string $input
     * @param bool $mb
     * @param bool $expected
     */
    public function testStringToLower($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\toLower($input, $mb));
    }
}
