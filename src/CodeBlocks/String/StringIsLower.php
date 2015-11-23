<?php

namespace Funct\CodeBlocks;

/**
 * Checks if letters in given string are all lowercase.
 *
 * @param string $input
 * @param bool $mb
 * @return bool
 *
 * @author Ernestas Kvedaras <kvedaras.ernestas@gmail.com>
 */
function string_is_lower($input, $mb = false)
{
    return $mb
        ? mb_strtolower($input, mb_detect_encoding($input, 'auto')) === $input
        : strtolower($input) === $input;
}
