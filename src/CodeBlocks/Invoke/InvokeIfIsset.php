<?php

namespace Funct\CodeBlocks;

use ArrayAccess;

/**
 * Invoke a method if value isset
 *
 * @param object|string $object An object or class name for static method calling
 * @param string $methodName A method name to call
 * @param array|ArrayAccess $values Values
 * @param scalar $key
 *
 * @return mixed
 */
function invoke_if_isset($object, $methodName, $values, $key)
{
    if (isset($values[$key])) {
        return call_user_func(
            [$object, $methodName],
            $values[$key]
        );
    }
}
