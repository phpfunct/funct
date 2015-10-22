<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class NullTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class NullTest extends \PHPUnit_Framework_TestCase
{
    public function testNull()
    {
        $value = null;

        $this->assertTrue(Funct\null($value));
    }

    public function testNotNull()
    {
        $value = '';

        $this->assertFalse(Funct\null($value));
    }
}
