<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class TrueTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class TrueTest extends \PHPUnit_Framework_TestCase
{
    public function testFalse()
    {
        $value = false;

        $this->assertFalse(Funct\true($value));
    }

    public function testTrue()
    {
        $value = true;

        $this->assertTrue(Funct\true($value));
    }
}
