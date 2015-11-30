<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionMaxTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionMaxTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionMax()
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
                'title' => 'c',
                'size'  => 3
            ]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionMax
     */
    public function testCollectionMax($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_max', $given));
    }
}
