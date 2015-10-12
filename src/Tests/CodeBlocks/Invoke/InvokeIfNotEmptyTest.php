<?php

namespace Funct\Tests\CodeBlocks\Invoke;

use Funct\CodeBlocks as Funct;
use Funct\Tests\Fixtures\SampleObject;

/**
 * Class InvokeIfNotEmptyTest
 *
 * @package Funct\Tests\CodeBlocks\Invoke
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class InvokeIfNotEmptyTest extends \PHPUnit_Framework_TestCase
{
    public function testInvokeIfNotEmpty()
    {
        $sampleObject = new SampleObject();

        $value = '';
        Funct\invoke_if_not_empty($sampleObject, 'setFoo', $value);

        $this->assertNull($sampleObject->getFoo());

        $value = 'foo';
        Funct\invoke_if_not_empty($sampleObject, 'setFoo', $value);

        $this->assertEquals($value, $sampleObject->getFoo());
    }
}
