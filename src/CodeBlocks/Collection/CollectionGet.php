<?php

namespace Funct\CodeBlocks;

use Traversable;

/**
 * Returns item from collection if exists overwise null or default value
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 *
 * @param array|Traversable $collection
 * @param string            $key
 * @param mixed             $default
 *
 * @return mixed
 */
function collection_get($collection, $key, $default = null)
{
    if (isset($collection[$key])) {
        return $collection[$key];
    } else {
        return $default;
    }
}
