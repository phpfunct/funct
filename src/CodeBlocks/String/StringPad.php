<?php

namespace Funct\CodeBlocks;

/**
 * Pads the string in the center with specified character. char may be a string or a number, defaults is a space
 *
 * @param string $string
 * @param int    $lenght
 * @param string $char
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_pad($string, $lenght, $char = ' ')
{
    return str_pad($string, $lenght, $char, STR_PAD_BOTH);
}
