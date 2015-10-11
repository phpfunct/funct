<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class NotEmptyTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class NotEmptyTest extends \PHPUnit_Framework_TestCase
{
    public function dataNotEmpty()
    {
        $out = [];

        $out[] = ['String', true];
        $out[] = ['', false];

        return $out;
    }


    /**
     * @dataProvider dataNotEmpty
     *
     * @param mixed $input
     * @param bool  $expected
     */
    public function testNotEmpty($input, $expected)
    {
        $this->assertEquals($expected, Funct\not_empty($input));
    }
}
