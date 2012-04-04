<?php
 /* This is the SubtractStrategy class for Subtracting numbers
 * @author Nick Rushton (nick.rushton@hotmail.com
 */ 
class Patterns_Strategy_SubtractStrategy implements Patterns_Strategy_Strategy
{
	/*operation to subtract the numbers
	 *@param TwoNumbers object
	 */
	public function operation(Patterns_Strategy_TwoNumbers $c)
	{
		return $c->getX() - $c->getY();
	}	
}
?>
