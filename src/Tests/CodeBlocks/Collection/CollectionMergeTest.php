<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionMergeTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class CollectionMergeTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionMerge()
    {
        $a = ['a', 'b', 'c'];
        $b = ['d', 'e'];
        $c = ['f'];

        $expected = ['a', 'b', 'c', 'd', 'e', 'f'];

        Funct\collection_merge($a, $b, $c);

        $this->assertEquals($expected, $a);
    }
}
