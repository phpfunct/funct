<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class FalseTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class FalseTest extends \PHPUnit_Framework_TestCase
{
    public function testFalse()
    {
        $value = false;

        $this->assertTrue(Funct\false($value));
    }

    public function testTrue()
    {
        $value = true;

        $this->assertFalse(Funct\false($value));
    }
}
