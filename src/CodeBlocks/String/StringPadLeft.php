<?php

namespace Funct\CodeBlocks;

/**
 * Left pads the string
 *
 * @param string $input
 * @param string $lenght
 * @param char 	 $char
 *
 * @return string
 *
 * @author Lucantis Swann <lucantis.swann@gmail.com>
 */
function string_pad_left($input, $lenght, $char = ' ')
{
	return str_pad($input, $lenght, $char, STR_PAD_LEFT);
}