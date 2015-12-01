<?php

namespace Funct\CodeBlocks;

/**
 * Converts hyphens and camel casing to underscores
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_dasherize($string)
{
    return strtolower(preg_replace('/(?<!^)([A-Z])/', '-$1', str_replace('_', '-', $string)));
}
