<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionRejectTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionRejectTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionReject()
    {
        $out = [];

        $out[] = [
            [1, 2, 3, 4, 5, 6],
            function ($item) {
                return ($item % 2) == 0;
            },
            [1, 2 => 3, 4 => 5]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionReject
     */
    public function testCollectionReject($given, $callback, $expected)
    {
        $this->assertEquals($expected, Funct\collection_reject($given, $callback));
    }
}
