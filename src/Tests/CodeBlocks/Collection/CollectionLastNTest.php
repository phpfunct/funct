<?php

namespace Funct\Tests\CodeBlocks\Invoke;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionLastNTest
 *
 * @package Funct\Tests\CodeBlocks\Invoke
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionLastNTest extends \PHPUnit_Framework_TestCase
{

    public function testLast()
    {
        $array  = range(1,9);

        $result = Funct\collection_last_n($array, 3);
        $this->assertEquals([7, 8, 9], $result);
    }
}
