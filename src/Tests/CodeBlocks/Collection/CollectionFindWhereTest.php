<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionFindWhereTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class CollectionFindWhereTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionFindWhere()
    {
        $out = [];

        $out[] = [
            [
                [
                    ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
                    ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
                    ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
                    ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
                    ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
                    ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
                ],
                ['author' => 'Shakespeare', 'year' => 1611]
            ],
            ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611]
        ];

        return $out;
    }

    /**
     * @dataProvider dataCollectionFindWhere
     */
    public function testCollectionFindWhere($given, $expected)
    {
        $this->assertEquals($expected, call_user_func_array('Funct\CodeBlocks\collection_find_where', $given));
    }
}
