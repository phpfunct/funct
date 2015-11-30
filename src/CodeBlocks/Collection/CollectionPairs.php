<?php

namespace Funct\CodeBlocks;

/**
 * Convert an array into a list of [key, value] pairs.
 *
 * @param array $collection
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_pairs($collection)
{
    return array_map(
        function ($key, $value) {
            return [$key, $value];
        },
        array_keys($collection),
        $collection
    );
}
