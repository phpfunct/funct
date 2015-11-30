<?php

namespace Funct\CodeBlocks;

/**
 * Returns a copy of the array with all instances of the values removed.
 *
 *
 * @param array $collection
 * @param array $without
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_without($collection, $without)
{
    $without = func_get_args();
    array_shift($without);

    return array_diff($collection, $without);
}
