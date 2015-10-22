<?php

namespace Funct\CodeBlocks;

/**
 * collection_merge function
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_merge(&$a, $b)
{
    $a = call_user_func_array('array_merge', func_get_args());
}
