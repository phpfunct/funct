<?php

namespace Funct\CodeBlocks;

/**
 * Right pads the string
 *
 * @param string $input
 * @param string $lenght
 * @param string $char
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_pad_right($input, $lenght, $char = ' ')
{
    return str_pad($input, $lenght, $char, STR_PAD_RIGHT);
}
