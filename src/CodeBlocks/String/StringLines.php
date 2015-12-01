<?php

namespace Funct\CodeBlocks;

/**
 * Returns an array with the lines. Cross-platform compatible
 *
 * @param string $string
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_lines($string)
{
    return preg_split('/\r\n|\n|\r/', $string);
}
