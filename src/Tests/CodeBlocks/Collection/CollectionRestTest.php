<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionRestTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionRestTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionRest()
    {
        $out = [];

        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [2, 3, 4, 5, 6, 7, 8, 9], 1];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [3, 4, 5, 6, 7, 8, 9], 2];
        $out[] = [[1, 2, 3, 4, 5, 6, 7, 8, 9], [6, 7, 8, 9], 5];

        return $out;
    }

    /**
     * @dataProvider dataCollectionRest
     */
    public function testCollectionRest($given, $expected, $from)
    {
        $this->assertEquals($expected, Funct\collection_rest($given, $from));
    }
}
