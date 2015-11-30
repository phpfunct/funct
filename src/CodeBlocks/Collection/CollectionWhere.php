<?php

namespace Funct\CodeBlocks;

/**
 * Looks through each value in the array, returning an array of all the values that contain all of the key-value pairs
 * listed in properties.
 *
 * @param array $collection
 * @param array $value
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_where($collection, $value)
{
    $result = [];

    foreach ($collection as $key => $item) {
        $diff = array_diff_assoc($value, $item);

        if (count($diff) < 1) {
            $result[$key] = $item;
        }
    }

    return $result;
}
