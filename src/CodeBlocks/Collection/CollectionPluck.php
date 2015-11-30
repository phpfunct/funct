<?php

namespace Funct\CodeBlocks;

/**
 * Extract single property from array of arrays
 *
 * @param array  $collection
 * @param string $key
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_pluck($collection, $key)
{
    return array_map(
        function ($item) use ($key) {
            return collection_get($item, $key);
        },
        $collection
    );
}
