<?php

namespace Funct\CodeBlocks;

/**
 * Count the occurences of substring in string
 *
 * @param string $input
 * @param string $prefix
 *
 * @return int
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_count($input, $substring)
{
        if (startswith($input, $prefix)) {
            return mb_substr($input, mb_strlen($prefix));
        }

        return $input;
}