<?php

namespace Funct\CodeBlocks;

/**
 * Camelizes string
 *
 * @param string $input
 * @param bool   $firstLetterUppercase
 *
 * @return string
 *
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_camelize($input, $firstLetterUppercase = false)
{
    $input = trim($input);

    if ($firstLetterUppercase) {
        $input = string_upper_case_first($input);
    } else {
        $input = string_lower_case_first($input);
    }

    $input = preg_replace('/^[-_]+/', '', $input);

    $input = preg_replace_callback(
        '/[-_\s]+(.)?/u',
        function ($match) {
            if (isset($match[1])) {
                return strtoupper($match[1]);
            } else {
                return '';
            }
        },
        $input
    );

    $input = preg_replace_callback(
        '/[\d]+(.)?/u',
        function ($match) {
            return strtoupper($match[0]);
        },
        $input
    );

    return $input;
}
