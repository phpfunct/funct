<?php

namespace Funct\CodeBlocks;

use Traversible;

/**
 * @param array|Traversible $collection
 *
 * @return array
 */
function collection_first($collection)
{
    return reset($collection);
}
