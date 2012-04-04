<?php
/* ConcreteComponent Class
 * This class is an implementation of the component interface
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
class Patterns_Decorator_ConcreteComponent implements Patterns_Decorator_Component
{
	public function foo()
	{
		echo 'This is the concrete implementation <br/>';
	}
}
