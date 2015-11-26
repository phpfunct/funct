<?php

namespace Funct\CodeBlocks;

/**
 * Extracts the string between two substrings
 *
 * @param string $input
 * @param string $left
 * @param string $right
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_between($input, $left, $right)
{
    $input = ' ' . $input;
    $ini = strpos($input, $left);
    if ($ini == 0) return '';
    $ini += strlen($left);
    $len = strpos($input, $right, $ini) - $ini;
    return substr($input, $ini, $len);
}