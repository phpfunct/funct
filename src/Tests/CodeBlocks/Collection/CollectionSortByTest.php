<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionSortByTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionSortByTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionSortBy()
    {
        $out = [];

        $out[] = [
            [1, 2, 3, 4, 5, 6],
            function ($item) {
                return sin($item);
            },
            'asort',
            [
                4 => 5,
                3 => 4,
                5 => 6,
                2 => 3,
                0 => 1,
                1 => 2
            ]
        ];

        $out[] = [
            [
                ['name' => 'moe', 'age' => 40],
                ['name' => 'larry', 'age' => 50],
                ['name' => 'curly', 'age' => 60]
            ],
            'name',
            'asort',
            [
                2 => ['name' => 'curly', 'age' => 60],
                1 => ['name' => 'larry', 'age' => 50],
                0 => ['name' => 'moe', 'age' => 40]
            ]
        ];

        $out[] = [
            [1, 2, 3, 4, 5, 6],
            function ($item) {
                return sin($item);
            },
            'arsort',
            [
                1 => 2,
                0 => 1,
                2 => 3,
                5 => 6,
                3 => 4,
                4 => 5
            ]
        ];

        $out[] = [
            [
                ['name' => 'moe', 'age' => 40],
                ['name' => 'larry', 'age' => 50],
                ['name' => 'curly', 'age' => 60]
            ],
            'name',
            'arsort',
            [
                0 => ['name' => 'moe', 'age' => 40],
                1 => ['name' => 'larry', 'age' => 50],
                2 => ['name' => 'curly', 'age' => 60]
            ]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionSortBy
     */
    public function testCollectionSortBy($given, $callback, $sortName, $expected)
    {
        $this->assertEquals($expected, Funct\collection_sort_by($given, $callback, $sortName));
    }
}
