<?php

namespace Funct\CodeBlocks;

/**
 * Creates a title version of the string. Capitalizes all the words and replaces some characters in the string to
 * create a nicer looking title. string_titleize is meant for creating pretty output
 *
 * @param string $string
 * @param array  $ignore
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_titleize($string, array $ignore = [])
{
    $string = preg_replace('/(?<!^)([A-Z])/', ' $1', $string);
    $string = preg_replace('/[^a-z0-9:]+/i', ' ', $string);
    $string = trim($string);

    return preg_replace_callback(
        '/([\S]+)/u',
        function ($match) use ($ignore) {
            if (in_array(strtolower($match[0]), $ignore)) {
                return $match[0];
            } else {
                return ucfirst(strtolower($match[0]));
            }
        },
        $string
    );
}
