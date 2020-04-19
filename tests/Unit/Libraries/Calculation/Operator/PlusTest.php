<?php

declare(strict_types=1);

namespace Tests\Unit\Libraries\Calculation\Operator;

use App\Libraries;
use CodeIgniter\Test\CIUnitTestCase;
use Faker\Factory;
use Faker\Generator;

class PlusTest extends CIUnitTestCase
{
	private Libraries\Calculation\Operator\Plus $operator;

	private Generator $faker;

	protected function setUp(): void
	{
		parent::setUp(); // TODO: Change the autogenerated stub
		$this->operator = new Libraries\Calculation\Operator\Plus();
		$this->faker = Factory::create();
	}

	/**
	 * @test
	 */
	public function calc_計算結果が正しく返るべき(): void
	{
		$val1 = $this->faker->randomDigitNotNull;
		$val2 = $this->faker->randomDigitNotNull;

		$actual = $this->operator->calc($val1, $val2);
		$expected = $val1 + $val2;
		$this->assertSame((float)$expected, $actual);
	}
}
