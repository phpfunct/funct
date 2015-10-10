<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringUpperCaseFirstTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class StringUpperCaseFirstTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringUpperCaseFirst()
    {
        $out = [];

        $out[] = ['foo', 'Foo'];
        $out[] = ['fOO', 'FOO'];
        $out[] = ['Foo', 'Foo'];

        return $out;
    }

    /**
     * @dataProvider dataStringUpperCaseFirst
     *
     * @param $input
     * @param $expected
     */
    public function testStringUpperCaseFirst($input, $expected)
    {
        $this->assertEquals($expected, Funct\string_upper_case_first($input));
    }
}
