<?php
/* test class for Decorator pattern
 * @author Nick Rushton (nick.rushton@hotmail.com)
 */

$component = new  Patterns_Decorator_CrazyDecorator(
				new  Patterns_Decorator_ConcreteDecorator(
					new  Patterns_Decorator_ConcreteComponent()
				)
			 );

$component->foo();
?>
