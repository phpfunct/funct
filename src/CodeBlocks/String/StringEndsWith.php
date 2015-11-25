<?php

namespace Funct\CodeBlocks;

/**
 * Check if string ends with substring
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_ends_with($input, $substring)
{
    return mb_substr($input, -strlen($substring)) === $substring;
}