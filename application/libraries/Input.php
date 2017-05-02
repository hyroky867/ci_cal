<?php

/**
 * 計算に必要な数値と演算子
 */
class Input
{
	/**
	 * @var int 入力値１ 
	 */
	private $value1;
	
	/**
	 * @var int 入力値２ 
	 */
	private $value2;
	
	/**
	 * @var string formから送信された四則演算子 
	 */
	private $post_operator;
	
	/**
	 * @var array select boxに表示する四則演算子 
	 */
	private $select_operator = [
		'+' => 'Plus',
		'-' => 'Minus',
		'*' => 'Multiple',
		'/' => 'Divide',
	];
	
	public function getOperatorClassname()
	{
		return $this->select_operator[$this->post_operator];
	}

	/**
	 * @param array $post $_POSTの配列
	 */
	public function __construct($post)
	{
		if (empty($post)){
			$this->value1		= 0;
			$this->value2		= 0;
			$this->post_operator = '+';
			
			return;
		}
		$this->value1		= (int) $post['value1'];
		$this->value2		= (int) $post['value2'];
		$this->post_operator = $post['operator'];
	}
	
	public function getValue1()
	{
		return $this->value1;
	}
	
	public function getValue2()
	{
		return $this->value2;
	}
	
	public function getSelectOperator()
	{
		return array_keys($this->select_operator);
	}
	
	public function getPostOperator()
	{
		return $this->post_operator;
	}
	
	/**
	 * htmlのoptionタグのselected属性を得る
	 * 
	 * @param string $operator 表示された四則演算子
	 * @return string optionタグのselected属性
	 */
	public function checkSelect($operator)
	{
		if ($this->post_operator === $operator) {
			return ' selected';
		}
	}
}
