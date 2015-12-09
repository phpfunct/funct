<?php

namespace Funct\Tests\Collection;

use Funct\Collection;

/**
 * Class CollectionReverseTest
 *
 * @package Funct\Tests\Collection
 * @author Rod Elias <rod@wgo.com.br>
*/
class CollectionReverseTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionReverse()
    {
        $given    = ['a', 'b', 'c'];
        $expected = ['c', 'b', 'a'];

        $givenPreserved = ['php', 4.0, ['green', 'red']];
        $expectedPreserved = [2 => ['green', 'red'], 1 => 4.0, 0 => 'php'];

        $this->assertEquals($expected, Collection\reverse($given));
        $this->assertEquals($expectedPreserved, Collection\reverse($givenPreserved, true));
    }
}
