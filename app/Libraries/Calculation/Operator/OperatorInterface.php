<?php

declare(strict_types=1);

namespace App\Libraries\Calculation\Operator;

interface OperatorInterface
{
	public function calc(int $val1, int $val2): float;
}
