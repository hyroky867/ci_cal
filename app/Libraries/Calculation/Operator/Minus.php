<?php

declare(strict_types=1);

namespace App\Libraries\Calculation\Operator;

class Minus implements OperatorInterface
{
	public function calc(int $val1, int $val2): float
	{
		return (float)$val1 - $val2;
	}
}
