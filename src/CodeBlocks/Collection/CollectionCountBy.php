<?php

namespace Funct\CodeBlocks;

/**
 * Sorts a array into groups and returns a count for the number of objects in each group. Similar to groupBy, but
 * instead of returning a array of values, returns a count for the number of values in that group.
 *
 * @param array           $collection
 * @param callable|string $callback
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_count_by($collection, $callback)
{
    $result = [];

    foreach ($collection as $key => $value) {
        if (is_callable($callback)) {
            $groupName = call_user_func($callback, $value);
        } else {
            $groupName = $value[$callback];
        }

        $result[$groupName] = collection_get($result, $groupName, 0);
        $result[$groupName]++;
    }

    return $result;
}
