<?php

namespace Funct\CodeBlocks;

/**
 * Return the substring denoted by n positive right-most characters
 *
 * @param string $string
 * @param int    $n
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_right($string, $n)
{
    $start = -$n;
    if ($n < 0) {
        $start = 0;
        $n     = -$n;
    }

    return substr($string, $start, $n);
}
