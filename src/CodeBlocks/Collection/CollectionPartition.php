<?php

namespace Funct\CodeBlocks;

/**
 * Split array into two arrays: one whose elements all satisfy callback and one whose elements all do not satisfy
 * callback.
 *
 * @param array    $collection
 * @param callable $callback
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_partition($collection, callable $callback)
{
    $resultA = [];
    $resultB = [];

    foreach ($collection as $key => $value) {
        if (call_user_func($callback, $value, $key)) {
            $resultA[$key] = $value;
        } else {
            $resultB[$key] = $value;
        }
    }

    return [$resultA, $resultB];
}
