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

        $out[] = ['rod', '3'];
        $out[] = ['foobar', '6'];

        $out[] = function_exists('mb_strlen') ? ['marçal', '6'] : ['marçal', 7];

        return $out;
    }

    /**
     * @dataProvider dataStringLength
     *
     * @param string $input
     * @param string $expected
     */
    public function testStringLength($input, $expected)
    {
        $this->assertEquals($expected, Strings\Length($input));
    }
}
