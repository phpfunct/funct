<?php

namespace Funct\CodeBlocks;

/**
 * Converts string to camelized class name. First letter is always upper case
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_classify($string)
{
    return string_camelize($string, true);
}
