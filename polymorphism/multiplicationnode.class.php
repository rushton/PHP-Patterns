<?php
class Patterns_Polymorphism_MultiplicationNode extends Patterns_Polymorphism_OpNode
{
	public function evaluate()
	{
		return $this->left->evaluate() * $this->right->evaluate();
	}

	public function render()
	{
		return $this->left->render().
			   ' * '.
			   $this->right->render();	
	}

}
?>
