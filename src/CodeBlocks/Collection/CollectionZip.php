<?php

namespace Funct\CodeBlocks;

/**
 * Merges together the values of each of the arrays with the values at the corresponding position.
 *
 * @param array $collectionFirst
 * @param array $collectionSecond
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_zip($collectionFirst, $collectionSecond)
{
    return collection_unzip(func_get_args());
}
