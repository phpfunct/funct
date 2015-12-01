<?php

namespace Funct\CodeBlocks;

/**
 * Returns a new string with all occurrences of [string1],[string2],... removed.
 *
 * @param string $string
 * @param string $string1
 * @param string $string2
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_strip($string, $string1)
{
    $arguments = func_get_args();

    return str_replace(array_slice($arguments, 1), '', $string);
}
