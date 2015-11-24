<?php

namespace Funct\CodeBlocks;

/**
 * Checks if the given key or index exists in the array
 *
 *
 * @param mixed $key
 * @param array $array
 *
 * @return bool
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function array_key_not_exists($key, array $array)
{
    return false === array_key_exists($key, $array);
}
