<?php

namespace Funct\CodeBlocks;

/**
 * Check if string contains only digits
 *
 * @param string $input
 *
 * @return bool
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_is_numeric($input)
{
    return ctype_digit($input);
}