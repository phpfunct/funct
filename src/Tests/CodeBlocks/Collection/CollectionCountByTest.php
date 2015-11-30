<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionCountByTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionCountByTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionCountBy()
    {
        $out = [];

        $out[] = [
            [
                [
                    ['color' => 'red', 'title' => 'foo'],
                    ['color' => 'red', 'title' => 'bar'],
                    ['color' => 'green', 'title' => 'foo'],
                    ['color' => 'green', 'title' => 'bar'],
                    ['color' => 'blue', 'title' => 'foo'],
                    ['color' => 'blue', 'title' => 'bar'],
                ],
                'color'
            ],
            [
                'red'   => 2,
                'green' => 2,
                'blue'  => 2
            ]
        ];

        $out[] = [
            [
                [
                    ['color' => 'red', 'title' => 'foo'],
                    ['color' => 'red', 'title' => 'bar'],
                    ['color' => 'green', 'title' => 'foo'],
                    ['color' => 'green', 'title' => 'bar'],
                    ['color' => 'blue', 'title' => 'foo'],
                    ['color' => 'blue', 'title' => 'bar'],
                ],
                function ($item) {
                    return $item['color'];
                }
            ],
            [
                'red'   => 2,
                'green' => 2,
                'blue'  => 2
            ]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionCountBy
     */
    public function testCollectionCountBy($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_count_by', $given));
    }
}
