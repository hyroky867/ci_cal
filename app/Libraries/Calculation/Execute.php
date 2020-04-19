<?php

declare(strict_types=1);

namespace App\Libraries\Calculation;

use App\Libraries\Calculation\Operator\OperatorInterface;
use App\Libraries;

/**
 * Class Execute
 *
 * @package App\Libraries\Calculation
 */
class Execute
{
	private OperatorInterface $operator;

	public function __construct(OperatorInterface $operator)
	{
		$this->operator = $operator;
	}

	public function getResult(Libraries\Request\Input $input): float
	{
		return $this->operator->calc(
			$input->getValue1(),
			$input->getValue2()
		);
	}
}
