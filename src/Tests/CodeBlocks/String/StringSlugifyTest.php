<?php

namespace Funct\Tests\CodeBlocks\String;

use Funct\CodeBlocks as Funct;

/**
 * Class StringSlugifyTest
 *
 * @package Funct\Tests\CodeBlocks\String
 * @author  Aurimas Niekis <aurimas.niekis@gmail.com>
 */
class StringSlugifyTest extends \PHPUnit_Framework_TestCase
{
    public function dataStringSlugify()
    {
        $out = [];

        $out[] = [
            'Global Thermonuclear Warfare',
            'global-thermonuclear-warfare'
        ];

        $out[] = [
            'Crème brûlée',
            'creme-brulee'
        ];

        return $out;
    }

    /**
     * @dataProvider dataStringSlugify
     */
    public function testStringSlugify($given, $expected)
    {
        $this->assertSame($expected, Funct\string_slugify($given));
    }
}
