<?php

namespace Funct\Tests\CodeBlocks\Invoke;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionFirstTest
 *
 * @package Funct\Tests\CodeBlocks\Invoke
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionFirstTest extends \PHPUnit_Framework_TestCase
{

    public function testFirst()
    {
        $array  = range(1,9);

        $result = Funct\collection_first($array);
        $this->assertEquals(1, $result);
    }
}
