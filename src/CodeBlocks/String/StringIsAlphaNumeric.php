<?php

namespace Funct\CodeBlocks;

/**
 * Check if string contains only alphanumeric
 *
 * @param string $input
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_is_alpha_numeric($input)
{
    return ctype_alnum($input);
}