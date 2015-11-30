<?php

namespace Funct\CodeBlocks;

/**
 * Returns the values in array without the elements that the truth test callback passes. The opposite of array_filter.
 *
 * @param array    $collection
 * @param callable $callback
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_reject($collection, callable $callback)
{
    return array_filter($collection, function ($item) use ($callback) {
        return false(call_user_func($callback, $item));
    });
}
