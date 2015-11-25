<?php

namespace Funct\CodeBlocks;

require_once('stringStartsWith.php');

/**
 * Removes prefix from start of string
 *
 * @param string $input
 * @param string $prefix
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_chomp_left($input, $prefix)
{
    if (string_starts_with($input, $prefix)) {
        return mb_substr($input, mb_strlen($prefix));
    }

    return $input;
}