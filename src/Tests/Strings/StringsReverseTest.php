<?php

namespace Funct\Tests\Strings;

use Funct\Strings;

/**
 * Class StringsReverseTest
 *
 * @package Funct\Tests\Strings
 * @author  Rod Elias <rod@wgo.com.br>
 */
class StringsReverseTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringReverse()
    {
        $out = [];

        $out[] = ['rod', 'dor'];
        $out[] = ['hello world', 'dlrow olleh'];

        return $out;
    }

    /**
     * @dataProvider dataStringReverse
     *
     * @param string $input
     * @param string $expected
     */
    public function testStringReverse($input, $expected)
    {
        $this->assertEquals($expected, Strings\reverse($input));
    }
}
