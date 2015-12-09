<?php

namespace Funct\Tests\Strings;

use Funct\Strings;

/**
 * Class StringsLengthTest
 *
 * @package Funct\Tests\Strings
 * @author  Rod Elias <rod@wgo.com.br>
 */
class StringsLengthTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringLength()
    {
        $out = [];

        $out[] = ['rod', true, 3];
        $out[] = ['rod', false, 3];
        $out[] = ['marçal', true, 6];
        $out[] = ['marçal', false, 7];

        return $out;
    }

    /**
     * @dataProvider dataStringLength
     *
     * @param string $input
     * @param string $expected
     */
    public function testStringLength($input, $mb, $expected)
    {
        $this->assertEquals($expected, Strings\Length($input, $mb));
    }
}
