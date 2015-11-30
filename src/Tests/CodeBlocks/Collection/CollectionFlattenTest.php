<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionFlattenTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionFlattenTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionFlatten()
    {
        $out = [];

        $out[] = [
            ['a', 'b', ['c']],
            ['a', 'b', 'c']
        ];

        $out[] = [
            ['a', ['b', ['c']]],
            ['a', 'b', 'c'],
            2
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
            3
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', ['d']],
            2
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', ['c', ['d']]],
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionFlatten
     */
    public function testCollectionFlatten($given, $expected, $depth = 1)
    {
        $this->assertEquals($expected, Funct\collection_flatten($given, $depth));
    }
}
