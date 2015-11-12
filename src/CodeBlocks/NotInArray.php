<?php

namespace Funct\CodeBlocks;

use Funct\CodeBlocks as Funct;

/**
 * Checks if needle is not in array
 *
 * @param      $needle
 * @param      $haystack
 * @param null $strict
 *
 * @return bool
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function not_in_array($needle, $haystack, $strict = null)
{
    return Funct\false(in_array($needle, $haystack, $strict));
}
