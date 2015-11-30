<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionMinTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionMinTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionMin()
    {
        $out = [];

        $out[] = [
            [
                [
                    10 => [
                        'title' => 'a',
                        'size'  => 1
                    ],
                    20 => [
                        'title' => 'b',
                        'size'  => 2
                    ],
                    30 => [
                        'title' => 'c',
                        'size'  => 3
                    ]
                ],
                function ($item) {
                    return $item['size'];
                }
            ],
            [
                'title' => 'a',
                'size'  => 1
            ]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionMin
     */
    public function testCollectionMin($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_min', $given));
    }
}
