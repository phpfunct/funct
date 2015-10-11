<?php

namespace Funct\CodeBlocks;

/**
 * Returns true if var is not empty
 *
 * @param mixed $var
 *
 * @return bool
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function not_empty($var)
{
    return false === empty($var);
}
