<?php

namespace Funct\CodeBlocks;

/**
 * Check if string contains only letters
 *
 * @param string $input
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_is_alpha($input)
{
    return ctype_alpha($input);
}