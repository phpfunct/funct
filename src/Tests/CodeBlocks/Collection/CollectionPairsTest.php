<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionPairsTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionPairsTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionPairs()
    {
        $given    = ['a', 'b', 'c'];
        $expected = [[0, 'a'], [1, 'b'], [2, 'c']];

        $this->assertEquals($expected, Funct\collection_pairs($given));
    }
}
