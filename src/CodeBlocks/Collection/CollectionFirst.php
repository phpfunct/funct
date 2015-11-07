<?php

namespace Funct\CodeBlocks;

use Traversable;

/**
 * @param array|Traversable $collection
 *
 * @return array
 */
function collection_first($collection)
{
    return reset($collection);
}
