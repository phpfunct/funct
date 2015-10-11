<?php

namespace Funct\Tests\CodeBlocks\Invoke;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionFirstNTest
 *
 * @package Funct\Tests\CodeBlocks\Invoke
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionFirstNTest extends \PHPUnit_Framework_TestCase
{

    public function testFirst()
    {
        $array  = range(1,9);

        $result = Funct\collection_first_n($array, 3);
        $this->assertEquals([1, 2, 3], $result);
    }
}
