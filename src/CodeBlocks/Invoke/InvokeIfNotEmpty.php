<?php

namespace Funct\CodeBlocks;

/**
 * Invoke a method if value is not empty
 *
 * @param mixed $var
 *
 * @return bool
 * @author Aurimas Niekis <aurimas.niekis@gmail.com>
 */
function invoke_if_not_empty($object, $methodName, $var)
{
    return invoke_if($object, $methodName, [$var], not_empty($var));
}
