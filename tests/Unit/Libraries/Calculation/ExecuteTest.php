<?php

declare(strict_types=1);

namespace Tests\Unit\Libraries\Calculation;

use App\Libraries;
use CodeIgniter\Services;
use CodeIgniter\Test\CIUnitTestCase;

class ExecuteTest extends CIUnitTestCase
{
	private Libraries\Calculation\Execute $execute;

	protected function setUp(): void
	{
		parent::setUp(); // TODO: Change the autogenerated stub
	}

	protected function tearDown(): void
	{
		parent::tearDown(); // TODO: Change the autogenerated stub
	}

	/**
	 * @test
	 */
	public function getResult_加算が成功するべき(): void
	{
		$operator = new Libraries\Calculation\Operator\Plus();
		$input = new Libraries\Request\Input([
			'value1'   => 6,
			'value2'   => 2,
			'operator' => '+',
		]);
		$this->execute = new Libraries\Calculation\Execute($operator);

		$actual = $this->execute->getResult($input);
		$this->assertSame(8.0, $actual);
	}

	/**
	 * @test
	 */
	public function getResult_減算が成功するべき(): void
	{
		$plus = new Libraries\Calculation\Operator\Minus();
		$input = new Libraries\Request\Input([
			'value1'   => 6,
			'value2'   => 2,
			'operator' => '-',
		]);
		$this->execute = new Libraries\Calculation\Execute($plus);

		$actual = $this->execute->getResult($input);
		$this->assertSame(4.0, $actual);
	}

	/**
	 * @test
	 */
	public function getResult_乗算が成功するべき(): void
	{
		$plus = new Libraries\Calculation\Operator\Multiple();
		$input = new Libraries\Request\Input([
			'value1'   => 6,
			'value2'   => 2,
			'operator' => '*',
		]);
		$this->execute = new Libraries\Calculation\Execute($plus);

		$actual = $this->execute->getResult($input);
		$this->assertSame(12.0, $actual);
	}

	/**
	 * @test
	 */
	public function getResult_除算が成功するべき(): void
	{
		$plus = new Libraries\Calculation\Operator\Divide();
		$input = new Libraries\Request\Input([
			'value1'   => 6,
			'value2'   => 2,
			'operator' => '/',
		]);
		$this->execute = new Libraries\Calculation\Execute($plus);

		$actual = $this->execute->getResult($input);
		$this->assertSame(3.0, $actual);
	}
}
