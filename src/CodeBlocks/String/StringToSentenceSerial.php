<?php

namespace Funct\CodeBlocks;

/**
 * The same as string_to_sentence, but adjusts delimeters to use Serial comma)
 *
 * @param array  $array
 * @param string $delimiter
 * @param string $lastDelimiter
 *
 * @return string
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function string_to_sentence_serial($array, $delimiter = ', ', $lastDelimiter = 'and ')
{
    $lastWord = array_pop($array);

    return implode($delimiter, $array) . $delimiter . $lastDelimiter . $lastWord;
}
