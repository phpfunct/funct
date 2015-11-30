<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionLastIndexOfTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionLastIndexOfTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionLastIndexOf()
    {
        $given    = ['a', 'a', 'a'];
        $expected = 2;

        $this->assertSame($expected, Funct\collection_last_index_of($given, 'a'));
        $this->assertFalse(Funct\collection_last_index_of($given, 'b'));
    }
}
