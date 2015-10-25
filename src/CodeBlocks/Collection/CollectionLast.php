<?php

namespace Funct\CodeBlocks;

use Traversable;

/**
 * @param array|Traversable $collection
 *
 * @return array
 */
function collection_last($collection)
{
    return end($collection);
}

