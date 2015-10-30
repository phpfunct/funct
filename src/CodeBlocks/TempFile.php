<?php

namespace Funct\CodeBlocks;

/**
 * Generates temp file on systems temp folder with prefix
 *
 * @param string $prefix
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function temp_file($prefix = 'php')
{
    return tempnam(sys_get_temp_dir(), $prefix);
}
