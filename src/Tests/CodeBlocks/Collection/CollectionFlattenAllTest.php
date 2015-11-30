<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionFlattenAllTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionFlattenAllTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionFlattenAll()
    {
        $out = [];

        $out[] = [
            ['a', 'b', ['c']],
            ['a', 'b', 'c']
        ];

        $out[] = [
            ['a', ['b', ['c']]],
            ['a', 'b', 'c'],
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
        ];

        $out[] = [
            ['a', ['b', ['c', ['d']]]],
            ['a', 'b', 'c', 'd'],
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionFlattenAll
     */
    public function testCollectionFlattenAll($given, $expected, $depth = 1)
    {
        $this->assertEquals($expected, Funct\collection_flatten_all($given, $depth));
    }
}
