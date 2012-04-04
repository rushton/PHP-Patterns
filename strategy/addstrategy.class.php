<?php
/* This is the AddStrategy class for adding numbers
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
class Patterns_Strategy_AddStrategy implements Patterns_Strategy_Strategy
{
	/*operation to add the numbers
	 *@param TwoNumbers object
	 */
	public function operation(Patterns_Strategy_TwoNumbers $c)
	{
		return $c->getX() + $c->getY();
	}
}
?>
