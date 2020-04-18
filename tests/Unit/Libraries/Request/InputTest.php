<?php

declare(strict_types=1);

namespace Tests\Unit\Libraries\Request;

use App\Libraries;
use CodeIgniter\Test\CIUnitTestCase;

/**
 * Class InputTest
 *
 * @package Tests\Unit\Libraries\Request
 */
class InputTest extends CIUnitTestCase
{

	private Libraries\Input $input;

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
	public function DIの値が空の配列の場合、初期値が入るべき(): void
	{
		$this->input = new Libraries\Input([]);

		$this->assertSame(0, $this->input->getValue1());
		$this->assertSame(0, $this->input->getValue2());
		$this->assertSame('+', $this->input->getPostOperator());
	}

	/**
	 * @test
	 */
	public function select用の演算子を配列で取得できるべき(): void
	{
		$this->input = new Libraries\Input([]);

		$expected = [
			'+',
			'-',
			'*',
			'/',
		];
		$this->assertSame($expected, $this->input->getSelectOperator());
	}

	/**
	 * @test
	 */
	public function 引数の演算子とDIの演算子が一致する場合、selectedの文字列が返るべき(): void
	{
		$operator = '+';
		$param = [
			'value1'   => 1,
			'value2'   => 2,
			'operator' => $operator,
		];
		$this->input = new Libraries\Input($param);

		$this->assertSame(' selected', $this->input->checkSelect($operator));
	}

	/**
	 * @test
	 */
	public function 引数の演算子とDIの演算子が一致しない場合、空の文字列が返るべき(): void
	{
		$operator = '+';
		$param = [
			'value1'   => 1,
			'value2'   => 2,
			'operator' => $operator,
		];
		$this->input = new Libraries\Input($param);

		$this->assertSame('', $this->input->checkSelect('-'));
	}
}
