<?php

namespace Funct\CodeBlocks;

use Traversible;

/**
 * @param array|Traversible $collection
 * @param int $n Last n elements of array
 *
 * @return array
 */
function collection_last_n($collection, $n = 1)
{
    return array_slice($collection, (-1 * $n));
}
