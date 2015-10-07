<?php

namespace Funct\CodeBlocks;

/**
 * Invoke a method if condition is true
 *
 * @param object|string $object An object or class name for static method calling
 * @param string $methodName A method name to call
 * @param array $methodArguments Argument list to pass to the method
 * @param bool $condition A condition which if it is true call method
 *
 * @return mixed
 */
function invoke_if($object, $methodName, $methodArguments = [], $condition)
{
    if (true === $condition) {
        return call_user_func_array(
            [$object, $methodName],
            $methodArguments
        );
    }
}
