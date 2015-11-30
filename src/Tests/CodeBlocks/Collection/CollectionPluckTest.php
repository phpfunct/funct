<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionPluckTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionPluckTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionPluck()
    {
        $out = [];

        $out[] = [
            [
                [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9]
                ],
                0
            ],
            [1, 4, 7]
        ];

        $out[] = [
            [
                [
                    ['a' => 'abc', 'b' => 'def', 'c' => 'ghi'],
                    ['a' => 'jkl', 'b' => 'mno', 'c' => 'pqrs']
                ],
                'c'
            ],
            ['ghi', 'pqrs']
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionPluck
     */
    public function testCollectionPluck($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_pluck', $given));
    }
}
