<?php
abstract class Patterns_Polymorphism_OpNode implements Patterns_Polymorphism_Node
{
	protected $left;
	protected $right;

	public function __construct($left,$right)
	{
		$this->left = $left;
		$this->right = $right;
	}
}
