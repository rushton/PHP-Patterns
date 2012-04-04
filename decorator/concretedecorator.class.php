<?php
/* decorator Class
 * This is a concrete decorator 
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
class Patterns_Decorator_ConcreteDecorator extends Patterns_Decorator_Decorator
{
	public function foo()
	{
		parent::foo();
		echo 'This is the decorator <br/>';
	}
}
?>
