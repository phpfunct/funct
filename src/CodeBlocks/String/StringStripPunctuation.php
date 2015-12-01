<?php

namespace Funct\CodeBlocks;

/**
 * Strip all of the punctuation
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_strip_punctuation($string)
{
    return preg_replace('/[^\w\s]|_/', '', $string);
}
