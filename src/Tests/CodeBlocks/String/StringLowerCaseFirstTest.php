<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringLowerCaseFirstTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class StringLowerCaseFirstTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringLowerCaseFirst()
    {
        $out = [];

        $out[] = ['Foo', 'foo'];
        $out[] = ['FOO', 'fOO'];
        $out[] = ['foo', 'foo'];

        return $out;
    }

    /**
     * @dataProvider dataStringLowerCaseFirst
     *
     * @param $input
     * @param $expected
     */
    public function testStringLowerCaseFirst($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_lower_case_first($input));
    }
}
