<?php
class Patterns_Decorator_CrazyDecorator extends Patterns_Decorator_Decorator
{
	public function foo()
	{
		parent::foo();
		echo 'This is the CRAZZY DECORATOR I\'VE COME TO CONSUME YOUUUUU!!!!';
	}
}
?>
