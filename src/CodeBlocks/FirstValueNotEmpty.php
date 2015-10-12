<?php

namespace Funct\CodeBlocks;

/**
 * Returns a first not empty value from function arguments
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function first_value_not_empty($valueA, $valueB)
{
    foreach (func_get_args() as $arg) {
        if (not_empty($arg)) {
            return $arg;
        }
    }
}
