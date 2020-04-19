<?php

declare(strict_types=1);

namespace App\Libraries\Calculation\Operator;

class Multiple implements OperatorInterface
{
	public function calc(int $val1, int $val2): float
	{
		return (float)$val1 * $val2;
	}
}