<?php

namespace Funct\CodeBlocks;

/**
 * Flattens a nested array by depth.
 *
 * @param array $collection
 * @param int   $depth
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_flatten($collection, $depth = 1)
{
    $result = [];

    foreach ($collection as $value) {
        if (is_array($value) && $depth > 0) {
            $result = array_merge($result, collection_flatten($value, --$depth));
        } else {
            $result[] = $value;
        }
    }

    return $result;
}
