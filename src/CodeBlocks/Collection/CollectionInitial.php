<?php

namespace Funct\CodeBlocks;

/**
 * Returns everything but the last entry of the array. Especially useful on the arguments object. Pass n to exclude the
 * last n elements from the result.
 *
 * @param array $collection
 * @param int   $n
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_initial($collection, $n = 1)
{
    return array_slice($collection, 0, -$n);
}
