<?php

namespace Funct\CodeBlocks;

/**
 * Returns true if var is not null
 *
 * @param mixed $var
 *
 * @return bool
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function not_null($var)
{
    return null !== $var;
}
