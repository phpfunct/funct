<?php

namespace Funct\CodeBlocks;

/**
 * Returns a first non null value from function arguments
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function first_value($valueA, $valueB)
{
    foreach (func_get_args() as $arg) {
        if (null !== $arg) {
            return $arg;
        }
    }
}
