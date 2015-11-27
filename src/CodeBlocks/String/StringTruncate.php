<?php

namespace Funct\CodeBlocks;

/**
 * Truncate string accounting for word placement and character count
 *
 * @param  string $input
 * @param  int    $length
 * @param  string $chars
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_truncate($input, $length, $chars = '…')
{
    if (strlen($input) > $length) {
        $splits = preg_split('/([\s\n\r]+)/u', $input, null, PREG_SPLIT_DELIM_CAPTURE);

        $splits_length = 0;
        for ($last_split = 0; $last_split < count($splits); ++$last_split) {
            $splits_length += strlen($splits[$last_split]);
            if ($splits_length > $length) {
                break;
            }
        }

        return implode(array_slice($splits, 0, $last_split)) . $chars;
    } else {
        return $input;
    }
}
