<?php

namespace Funct\CodeBlocks;

/**
 * Converts the text into a valid url slug. Removes accents from Latin characters
 *
 * @param string $string
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_slugify($string)
{
    $string = string_latinize($string);
    $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
    $string = trim($string, '-');
    $string = strtolower($string);

    return preg_replace('~[^-\w]+~', '', $string);
}
