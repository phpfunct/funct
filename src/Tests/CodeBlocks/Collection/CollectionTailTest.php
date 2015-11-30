<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionTailTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionTailTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionTail()
    {
        $out = [];

        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [2, 3, 4, 5, 6, 7, 8, 9], 1];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [3, 4, 5, 6, 7, 8, 9], 2];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [6, 7, 8, 9], 5];

        return $out;
    }

    /**
     * @dataProvider dataCollectionTail
     */
    public function testCollectionTail($given, $expected, $from)
    {
        $this->assertEquals($expected, Funct\collection_tail($given, $from));
    }
}
