<?php

namespace Funct\Tests\Collection;

use Funct\Collection;

/**
 * Class CollectionSizeTest
 *
 * @package Funct\Tests\Collection
 * @author  Rod Elias <rod@wgo.com.br>
 */
class CollectionSizeTest extends \PHPUnit_Framework_TestCase
{
    public function dataCollectionSize()
    {
        $out = [];
	 	$out[] = [['a', 'b', 'c'], false, 3];
	 	$out[] = [['a', 'b', ['c', 'd']], false, 3];
	 	$out[] = [['a', 'b', ['c', 'd']], true, 5];
	 	$out[] = [null, true, 0];
	 	$out[] = [['fruits' => ['orange', 'banana', 'apple'], 'veggie' => ['carrot', 'collard', 'pea']], false, 2];
	 	$out[] = [['fruits' => ['orange', 'banana', 'apple'], 'veggie' => ['carrot', 'collard', 'pea']], true, 8];

        return $out;
    }

    /**
     * @dataProvider dataCollectionSize
     *
     */
    public function testCollectionSize($given, $mode, $expected)
    {
        $this->assertEquals($expected, Collection\size($given, $mode));
    }
}
