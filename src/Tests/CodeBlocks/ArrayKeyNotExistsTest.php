<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class ArrayKeyNotExistsTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class ArrayKeyNotExistsTest extends \PHPUnit_Framework_TestCase
{
    public function testArrayKeyNotExists()
    {
        $given = ['a' => 1, 'b' => 2, 'c' => 3];

        $this->assertTrue(Funct\array_key_not_exists('d', $given));
        $this->assertFalse(Funct\array_key_not_exists('c', $given));
    }
}
