<?php
class Patterns_Polymorphism_ValueNode implements Patterns_Polymorphism_Node
{
	private $value;

	public function __construct($value)
	{
		$this->value = $value;
	}
	public function evaluate()
	{
		return $this->value;
	}	

	public function render()
	{
		return $this->value;
	}
}
?>
