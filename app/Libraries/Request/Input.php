<?php

declare(strict_types=1);

namespace App\Libraries;

/**
 * Class Input
 */
class Input
{
	/**
	 * @var integer 入力値１
	 */
	private int $value1 = 0;

	/**
	 * @var integer 入力値２
	 */
	private int $value2 = 0;

	/**
	 * @var string formから送信された四則演算子
	 */
	private string $post_operator = '+';

	/**
	 * @var array select boxに表示する四則演算子
	 */
	private array $select_operator = [
		'+' => 'Plus',
		'-' => 'Minus',
		'*' => 'Multiple',
		'/' => 'Divide',
	];

	public function getOperatorClassname(): string
	{
		return $this->select_operator[$this->post_operator];
	}

	/**
	 * @param array $post $_POSTの配列
	 */
	public function __construct(array $post)
	{
		if (empty($post)) {
			return;
		}
		$this->value1        = (int)$post['value1'];
		$this->value2        = (int)$post['value2'];
		$this->post_operator = $post['operator'];
	}

	public function getValue1(): int
	{
		return $this->value1;
	}

	public function getValue2(): int
	{
		return $this->value2;
	}

	public function getSelectOperator(): array
	{
		return array_keys($this->select_operator);
	}

	public function getPostOperator(): string
	{
		return $this->post_operator;
	}

	/**
	 * htmlのoptionタグのselected属性を得る
	 *
	 * @param  string $operator 表示された四則演算子
	 * @return string optionタグのselected属性
	 */
	public function checkSelect(string $operator): string
	{
		if ($this->post_operator === $operator) {
			return ' selected';
		}
		return '';
	}
}
