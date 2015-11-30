<?php

namespace Funct\CodeBlocks;

/**
 * Computes the union of the passed-in arrays: the list of unique items, in order, that are present in one or more of
 * the arrays.
 *
 * @param array $collectionFirst
 * @param array $collectionSecond
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_union($collectionFirst, $collectionSecond)
{
    $result = call_user_func_array('array_merge', func_get_args());

    return array_unique($result);
}
