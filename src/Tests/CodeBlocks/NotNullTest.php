<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class NotNullTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class NotNullTest extends \PHPUnit_Framework_TestCase
{
    public function dataNotNull()
    {
        $out = [];

        $out[] = ['String', true];
        $out[] = [null, false];

        return $out;
    }


    /**
     * @dataProvider dataNotNull
     *
     * @param mixed $input
     * @param bool  $expected
     */
    public function testNotNull($input, $expected)
    {
        $this->assertEquals($expected, Funct\not_null($input));
    }
}
