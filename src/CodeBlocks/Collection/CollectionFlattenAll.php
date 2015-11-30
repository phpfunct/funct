<?php

namespace Funct\CodeBlocks;

use RecursiveArrayIterator;
use RecursiveIteratorIterator;

/**
 * Flattens all arrays to single level
 *
 * @param array $collection
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_flatten_all($collection)
{
    $result = [];

    foreach ($collection as $value) {
        if (is_array($value)) {
            $result = array_merge($result, collection_flatten_all($value));
        } else {
            $result[] = $value;
        }
    }

    return $result;
}
