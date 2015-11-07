<?php

namespace Funct\CodeBlocks;

use Traversable;

/**
 * collection_merge function
 *
 * @param array|Traversable $a
 * @param array|Traversable $b
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_merge(&$a, $b)
{
    $a = call_user_func_array('array_merge', func_get_args());
}
