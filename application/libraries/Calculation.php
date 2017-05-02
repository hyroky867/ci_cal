<?php

/**
 * 計算をするクラス
 */
class Calculation
{
	private $operator;

	public function __construct(Operator $operator)
	{
		$this->operator = $operator;
	}

	/**
	 * 計算結果を得る
	 *
	 * @param array $post_value $_POSTで受け取った値
	 * @return int | string 四則演算によって得られる値、または、エラーの文字列、または、0
	 */
	public function getResult(Input $input)
	{
		return $this->operator->calc(
			$input->getValue1(),
			$input->getValue2()
		);
	}
}
