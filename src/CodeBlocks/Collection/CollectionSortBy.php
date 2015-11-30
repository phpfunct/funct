<?php

namespace Funct\CodeBlocks;

/**
 * Returns a sorted array by callback function which should return value to which sort
 *
 * @param array           $collection
 * @param callable|string $sortBy
 * @param string          $sortFunction
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_sort_by($collection, $sortBy, $sortFunction = 'asort')
{
    if (false(is_callable($sortBy))) {
        $sortBy = function ($item) use ($sortBy) {
            return $item[$sortBy];
        };
    }

    $values = array_map($sortBy, $collection);
    $sortFunction($values);

    $result = [];
    foreach ($values as $key => $value) {
        $result[$key] = $collection[$key];
    }

    return $result;
}
