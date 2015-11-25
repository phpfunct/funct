<?php

namespace Funct\CodeBlocks;

/**
 * Check if string starts with substring
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_starts_with($input, $substring)
{
    return mb_strpos($input, $substring) === 0;
}