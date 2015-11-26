<?php

namespace Funct\CodeBlocks;

/**
 * Collapse multiple spaces
 *
 * @param string $input
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_collapse_whitespace($input)
{
    return preg_replace('/\s+/u', ' ', $input);
}