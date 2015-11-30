<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionInitialTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionInitialTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionInitial()
    {
        $out = [];

        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [1, 2, 3, 4, 5, 6, 7, 8], 1];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [1, 2, 3, 4, 5, 6, 7], 2];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [1, 2, 3, 4], 5];

        return $out;
    }

    /**
     * @dataProvider  dataCollectionInitial
     */
    public function testCollectionInitial($given, $expected, $n)
    {
        $this->assertEquals($expected, Funct\collection_initial($given, $n));
    }
}
