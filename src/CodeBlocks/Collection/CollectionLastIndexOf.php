<?php

namespace Funct\CodeBlocks;

/**
 * Returns the index of the last occurrence of value in the array, or false if value is not present
 *
 * @param array $collection
 * @param mixed $value
 *
 * @return int|bool
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_last_index_of($collection, $value)
{
    $result = array_keys($collection, $value);

    if (count($result) < 1) {
        return false;
    }

    return end($result);
}
