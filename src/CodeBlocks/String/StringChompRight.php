<?php

namespace Funct\CodeBlocks;

/**
 * Removes suffix from end of string
 *
 * @param string $input
 * @param string $suffix
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_chomp_right($input, $suffix)
{
    if (string_ends_with($input, $sufix)) {

        return mb_substr($input, 0, mb_strlen($input) - mb_strlen($sufix));
    }

    return $input;
}