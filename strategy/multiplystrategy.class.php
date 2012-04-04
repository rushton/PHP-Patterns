<?php 
/* This is the multiplyStrategy class for multiplying numbers 
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
class Patterns_Strategy_MultiplyStrategy implements Patterns_Strategy_Strategy
{
	/*This operation multiplies the numbers
   	 *@param TwoNumbers object
	 *@return int
	 */
	public function operation(Patterns_Strategy_TwoNumbers $c)
	{
		return $c->getX() * $c->getY();
	}
}
?>
