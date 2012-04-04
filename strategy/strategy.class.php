<?php
/* This is the Strategy interface for the strategy subclasses
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
interface Patterns_Strategy_Strategy
{
	/*Operation to preform on the numbers
	 *@var TwoNumbers - an instance of the TwoNumbers class
     */
	public function operation(Patterns_Strategy_TwoNumbers $c);
}
?>
