<?php

namespace Funct\CodeBlocks;

/**
 * Splits a collection into sets, grouped by the result of running each value through callback. If callback is a string
 * instead of a function, groups by the property named by callback on each of the values.
 *
 * @param array           $collection
 * @param callable|string $callback
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_group_by($collection, $callback)
{
    $result = [];

    foreach ($collection as $key => $value) {
        if (is_callable($callback)) {
            $groupName = call_user_func($callback, $value);
        } else {
            $groupName = $value[$callback];
        }

        $result[$groupName]       = collection_get($result, $groupName, []);
        $result[$groupName][$key] = $value;
    }

    return $result;
}
