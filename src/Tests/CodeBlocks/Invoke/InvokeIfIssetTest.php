<?php

namespace Funct\Tests\CodeBlocks\Invoke;

use Funct\CodeBlocks as Funct;
use Funct\Tests\Fixtures\SampleObject;

class InvokeIfIssetTest extends \PHPUnit_Framework_TestCase
{
    public function testInvokeIf()
    {
        $sampleObject = new SampleObject();

        $values = [];
        Funct\invoke_if_isset($sampleObject, 'setFoo', $values, 'bar');

        $this->assertNull($sampleObject->getFoo());

        $values = ['bar' => 'foo'];
        Funct\invoke_if_isset($sampleObject, 'setFoo', $values, 'bar');

        $this->assertEquals($values['bar'], $sampleObject->getFoo());
    }
}
