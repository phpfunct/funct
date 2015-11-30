<?php

namespace Funct\CodeBlocks;

/**
 * Returns the rest of the elements in an array. Pass an from to return the values of the array from that index onward.
 *
 * @param array $collection
 * @param int   $from
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_rest($collection, $from = 1)
{
    return array_slice($collection, $from);
}
