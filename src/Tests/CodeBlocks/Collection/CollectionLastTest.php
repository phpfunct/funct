<?php

namespace Funct\Tests\CodeBlocks\Invoke;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionLastTest
 *
 * @package Funct\Tests\CodeBlocks\Invoke
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionLastTest extends \PHPUnit_Framework_TestCase
{

    public function testLast()
    {
        $array  = range(1,9);

        $result = Funct\collection_last($array);
        $this->assertEquals(9, $result);
    }
}
