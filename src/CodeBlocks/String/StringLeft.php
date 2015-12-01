<?php

namespace Funct\CodeBlocks;

/**
 * Return the substring denoted by n positive left-most characters
 *
 * @param string $string
 * @param int    $n
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_left($string, $n)
{
    $start = 0;
    if ($n < 0) {
        $start = $n;
        $n     = -$n;
    }

    return substr($string, $start, $n);
}
