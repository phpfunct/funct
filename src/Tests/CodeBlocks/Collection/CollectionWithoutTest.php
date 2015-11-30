<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionWithoutTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionWithoutTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionWithout()
    {
        $out = [];

        $out[] = [
            [
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                2
            ],
            [0 => 1, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10]
        ];

        $out[] = [
            [
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                2,
                4,
                6,
                8,
                10
            ],
            [0 => 1, 2 => 3, 4 => 5, 6 => 7, 8 => 9]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionWithout
     */
    public function testCollectionWithout($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_without', $given));
    }
}
