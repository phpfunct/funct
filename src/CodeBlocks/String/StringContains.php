<?php

namespace Funct\CodeBlocks;

/**
 * Check if string contains substring
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_contains($input, $substring)
{
    return mb_strpos($input, $substring) !== false;
}