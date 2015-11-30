<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionSomeTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionSomeTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionSome()
    {
        $out = [];

        $out[] = [
            ['', 0, false],
            null,
            false
        ];

        $out[] = [
            ['a', 0, true],
            null,
            true
        ];

        $out[] = [
            ['a', 1, true],
            null,
            true
        ];

        $out[] = [
            [2, 4, 6, 8],
            function ($item) {
                return ($item % 2) === 0;
            },
            true
        ];

        $out[] = [
            [1, 3, 5, 7, 8],
            function ($item) {
                return ($item % 2) !== 0;
            },
            true
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionSome
     */
    public function testCollectionSome($given, $callback, $expected)
    {
        $this->assertSame($expected, Funct\collection_some($given, $callback));
    }
}
