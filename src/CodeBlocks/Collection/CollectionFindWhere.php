<?php

namespace Funct\CodeBlocks;

/**
 * Looks through the array and returns the first value that matches all of the key-value pairs listed in properties.
 *
 * @param array $collection
 * @param array $value
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_find_where($collection, $value)
{
    foreach ($collection as $key => $item) {
        $diff = array_diff_assoc($value, $item);

        if (count($diff) < 1) {
            return $item;
        }
    }
}
