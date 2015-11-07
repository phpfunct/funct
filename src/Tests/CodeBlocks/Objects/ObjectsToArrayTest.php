<?php

namespace Funct\Tests\CodeBlocks\Objects;

use Funct\CodeBlocks as Funct;
use Funct\Tests\Fixtures\SampleObject;

/**
 * Class ObjectsToArrayTest
 *
 * @package Funct\Tests\CodeBlocks\Objects
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class ObjectsToArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectsToArray()
    {
        $a = new SampleObject();
        $a->setBar('foo1');
        $a->setFoo('bar');

        $b = clone $a;
        $b->setBar('foo2');

        $c = clone $a;
        $c->setBar('foo3');

        $d = clone $a;
        $d->setBar('foo4');

        $objects = [$a, $b, $c, $d];

        $expected = ['bar', 'bar', 'bar', 'bar'];

        $this->assertEquals($expected, Funct\objects_to_array($objects, 'getFoo'));

        $expected = [
            'foo1' => 'bar',
            'foo2' => 'bar',
            'foo3' => 'bar',
            'foo4' => 'bar',
        ];

        $this->assertEquals($expected, Funct\objects_to_array($objects, 'getFoo', 'getBar'));
    }
}
