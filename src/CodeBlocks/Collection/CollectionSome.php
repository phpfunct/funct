<?php

namespace Funct\CodeBlocks;

/**
 * Returns true if any of the values in the array pass the callback truth test.
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 *
 * @param array    $collection
 * @param callable $callback
 *
 * @return bool
 */
function collection_some($collection, callable $callback = null)
{
    if (null($callback)) {
        $callback = function ($item) use ($callback) {
            return (true == $item);
        };
    }

    return count(array_filter($collection, $callback)) > 0;
}
