<?php

namespace Funct\CodeBlocks;

use Traversable;

/**
 * Creates array from objects using valueMethod as value and with/without keyMethod as key
 *
 * @param array|Traversable $objects
 * @param string            $valueMethod
 * @param string            $keyMethod
 *
 * @return array
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function objects_to_array($objects, $valueMethod, $keyMethod = null)
{
    $results = [];

    foreach ($objects as $object) {
        $value = call_user_func([$object, $valueMethod]);
        if (not_null($keyMethod)) {
            $key = call_user_func([$object, $keyMethod]);

            $results[$key] = $value;
        } else {
            $results[] = $value;
        }
    }

    return $results;
}
