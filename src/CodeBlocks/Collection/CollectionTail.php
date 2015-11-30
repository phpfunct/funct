<?php

namespace Funct\CodeBlocks;

/**
 * @see    collection_rest
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_tail($collection, $from = 1)
{
    return collection_rest($collection, $from);
}
