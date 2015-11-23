<?php

namespace Funct\CodeBlocks;

/**
 * Checks if letters in given string are all uppercase.
 *
 * @param string $input
 * @param bool $mb
 * @return bool
 *
 * @author Ernestas Kvedaras <kvedaras.ernestas@gmail.com>
 */
function string_is_upper($input, $mb = false)
{
    return $mb
        ? mb_strtoupper($input, mb_detect_encoding($input, 'auto')) === $input
        : strtoupper($input) === $input;
}
