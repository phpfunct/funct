<?php

namespace Funct\Tests\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Class TempFileTest
 *
 * @package Funct\Tests\CodeBlocks
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
*/
class TempFileTest extends \PHPUnit_Framework_TestCase
{
    public function testTempFile()
    {
        $tempFile = Funct\temp_file();

        $this->assertFileExists($tempFile);

        unlink($tempFile);
    }

    public function testTempFileWithPrefix()
    {
        $tempFile = Funct\temp_file('fooBar');

        $filename = basename($tempFile);
        $this->assertStringStartsWith('fooBar', $filename);

        unlink($tempFile);
    }
}
