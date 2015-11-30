<?php

namespace Funct\CodeBlocks;

/**
 * Computes the list of values that are the intersection of all the arrays. Each value in the result is present in each
 * of the arrays.
 *
 * @param array $collectionFirst
 * @param array $collectionSecond
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_intersection($collectionFirst, $collectionSecond)
{
    return call_user_func_array('array_intersect', func_get_args());
}
