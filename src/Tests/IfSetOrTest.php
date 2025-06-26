<?php

namespace Funct\Tests;

use Funct as Funct;

/**
 * Class IfSetOrTest
 *
 * @package Funct\Tests
 * @author Christophe Jean <cj@myjob.company>
*/
class IfSetOrTest extends \PHPUnit_Framework_TestCase
{
    public function testIsNotSet()
    {
        $this->assertNull(Funct\ifSetOr($foo));
        $this->assertEquals('bar', Funct\ifSetOr($foo2, 'bar'));
    }

    public function testIsSet()
    {
        $foo = 'foo';
        $this->assertEquals('foo', Funct\ifSetOr($foo));
        $this->assertEquals('foo', Funct\ifSetOr($foo, 'x'));
    }
}
