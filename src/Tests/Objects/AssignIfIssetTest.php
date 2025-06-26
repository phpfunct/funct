<?php

namespace Funct\Tests\Objects;

use Funct\Object as Obj;

/**
 * Class AssignIfIssetTest
 *
 * @package Funct\Tests\Objects
 * @author  Aurimas Niekis <aurimas@niekis.lt>
 */
class AssignIfIssetTest extends \PHPUnit_Framework_TestCase
{
    public function testMethod()
    {
        $object = new \stdClass();
        $array = [];

        Obj\assignIfIsset($object, 'foo', $array, 'bar');

        $this->assertObjectNotHasAttribute('foo', $object);

        $array = ['bar' => 'foobar'];

        Obj\assignIfIsset($object, 'foo', $array, 'bar');
        $this->assertObjectHasAttribute('foo', $object);
        $this->assertSame('foobar', $object->foo);
    }
}
