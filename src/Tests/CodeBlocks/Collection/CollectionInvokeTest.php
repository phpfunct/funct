<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionInvokeTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionInvokeTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionInvoke()
    {
        $out = [];

        $out[] = [
            [
                ['a', 'b', 'c'],
                'strtoupper'
            ],
            ['A', 'B', 'C']
        ];

        $out[] = [
            [
                ['a', 'b', 'c'],
                function ($item, $prefix) {
                    return $prefix . $item;
                },
                '1'
            ],
            ['1a', '1b', '1c']
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionInvoke
     */
    public function testCollectionInvoke($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\\CodeBlocks\\collection_invoke', $given));
    }
}
