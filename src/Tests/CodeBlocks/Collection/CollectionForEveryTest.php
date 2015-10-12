<?php

namespace Funct\Tests\CodeBlocks\Collection;

use Funct\CodeBlocks as Funct;

/**
 * Class CollectionForEveryTest
 *
 * @package Funct\Tests\CodeBlocks\Collection
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class CollectionForEveryTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionForEvery()
    {
        $values = ['foo_bar', 'bar_foo', 'foo', 'bar'];
        $expected = ['FOO_BAR', 'BAR_FOO', 'FOO', 'BAR'];

        $result = Funct\collection_for_every($values, 'strtoupper');

        $this->assertEquals($expected, $result);

        $expected = ['coo_bar', 'bar_coo', 'coo', 'bar'];

        $result = Funct\collection_for_every($values, function ($value, $what, $with) {
            return str_replace($what, $with, $value);
        }, ['foo', 'coo']);
    }
}
