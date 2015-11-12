<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class NotInArrayTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class NotInArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testNotInArray()
    {
        $a = ['a', 'b', 'c'];

        $this->assertTrue(Funct\not_in_array('d', $a));
        $this->assertFalse(Funct\not_in_array('a', $a));
    }
}
