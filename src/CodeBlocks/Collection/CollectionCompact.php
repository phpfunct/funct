<?php

namespace Funct\CodeBlocks;

/**
 * Returns a copy of the array with all falsy values removed
 *
 * @param array $collection
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_compact($collection)
{
    return array_filter($collection);
}
