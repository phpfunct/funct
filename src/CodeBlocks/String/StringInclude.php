<?php

namespace Funct\CodeBlocks;

/**
 * Alias of string_contains
 *
 * @param string $input
 * @param string $substring
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_include($input, $substring)
{
    return string_contains($input, $substring);
}
