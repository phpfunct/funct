<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionIntersectionTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionIntersectionTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionIntersection()
    {
        $out = [];

        $out[] = [
            [
                [1, 2, 3],
                [3, 4, 5],
                [6, 7, 3],
                [3, 2, 1]
            ],
            [2 => 3]
        ];

        $out[] = [
            [
                [1, 2, 3],
                [101, 2, 1, 10],
                [2, 1]
            ],
            [1, 2]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionIntersection
     */
    public function testCollectionIntersection($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_intersection', $given));
    }
}
