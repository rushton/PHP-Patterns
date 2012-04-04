<?php
/* decorator Class
 * This is a base class for all decorators 
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
abstract class Patterns_Decorator_Decorator implements Patterns_Decorator_Component
{
	/*
	 *Reference to the component class being acted on
	 */
	public $component;

	public function  __construct(Patterns_Decorator_Component $comp)
	{
		$this->component = $comp;
	}

	public function foo()	
	{
		$this->component->foo();
	}
} 
?>
