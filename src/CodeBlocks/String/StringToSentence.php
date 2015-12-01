<?php

namespace Funct\CodeBlocks;

/**
 * Join an array into a human readable sentence
 *
 * @param array  $array
 * @param string $delimiter
 * @param string $lastDelimiter
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_to_sentence($array, $delimiter = ', ', $lastDelimiter = ' and ')
{
    $lastWord = array_pop($array);

    return implode($delimiter, $array) . $lastDelimiter . $lastWord;
}
