<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionGetTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class CollectionGetTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionGetExists()
    {
        $collection = ['a', 'b', 'c'];

        $result = Funct\collection_get($collection, 1);

        $this->assertEquals('b', $result);

        $result = Funct\collection_get($collection, 4);
        $this->assertNull($result);

        $result = Funct\collection_get($collection, 4, 'foobar');
        $this->assertEquals('foobar', $result);
    }
}
