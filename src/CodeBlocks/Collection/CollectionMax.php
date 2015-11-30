<?php

namespace Funct\CodeBlocks;

/**
 * Returns the maximum value in collection using callback method
 *
 * @param array    $collection
 * @param callable $callback
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_max($collection, callable $callback)
{
    $values = array_map($callback, $collection);
    $keys   = array_flip($values);

    return $collection[$keys[max($values)]];
}
