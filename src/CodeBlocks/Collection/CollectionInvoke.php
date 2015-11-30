<?php

namespace Funct\CodeBlocks;

/**
 * Invokes callback on each value in the list. Any extra arguments passed will be forwarded on to the method invocation.
 *
 * @param array    $collection
 * @param callable $callback
 *
 * @return array
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function collection_invoke($collection, callable $callback)
{
    $arguments = func_get_args();

    return array_map(
        function ($item) use ($callback, $arguments) {
            $arguments = array_merge([$item], array_slice($arguments, 2));

            return call_user_func_array($callback, $arguments);
        },
        $collection
    );
}
