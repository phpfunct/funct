<?php

namespace Funct\CodeBlocks;

use Traversable;

/**
 * Runs a callback for every value in collection with value as first argument and additional arguments and returns
 * array of results
 *
 * @param array|Traversable $collecion
 * @param callable          $callable
 * @param array             $additionalArguments
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_for_every($collecion, $callable, $additionalArguments = [])
{
    $output = [];

    foreach ($collecion as $value) {
        $arguments = array_merge([$value], $additionalArguments);

        $output[] = call_user_func_array($callable, $arguments);
    }

    return $output;
}
