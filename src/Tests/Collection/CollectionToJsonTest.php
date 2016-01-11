<?php

namespace Funct\Tests\Collection;

use Funct\Collection;

/**
 * Class CollectionToJsonTest
 *
 * @package Funct\Tests\Collection
 * @author Rod Elias <rod@wgo.com.br>
*/
class CollectionToJsonTest extends \PHPUnit_Framework_TestCase
{
    public function testCollectionToJson()
    {
        $input = ['a' => 1, 'b' => 2, 'c' => 3];

        $expected = json_encode($input);

        $this->assertEquals($expected, Collection\toJson($input));
    }
}
