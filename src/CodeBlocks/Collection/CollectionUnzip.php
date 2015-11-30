<?php

namespace Funct\CodeBlocks;

/**
 * The opposite of zip. Given a number of arrays, returns a series of new arrays, the first of which contains all of
 * the first elements in the input arrays, the second of which contains all of the second elements, and so on.
 *
 * @param array $collection
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_unzip($collection)
{
    $length = count(collection_max($collection, 'count'));
    $result = [];

    for ($i = 0; $i < $length; $i++) {
        $result[$i] = collection_pluck($collection, $i);
    }

    return $result;
}
