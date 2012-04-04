<?php
/*This is the contextual class for the strategy pattern to operate with
 * @author Nick Rushton (nick.rushton@hotmail.com
 */
class Patterns_Strategy_TwoNumbers
{
	/*
	 *First Number
	 */
	private $x;
	/*
	 *Second Number
	 */
	private $y;

	/*
	 * Strategy object to decide how to operate on the numbers
     */
	private $strategy;

	/*Constructor for the two numbers
	 *@param int first number
	 *@param int second number
     *@param Strategy object
	 */
	public function __construct($x,$y,Patterns_Strategy_Strategy $strategy = null)
	{
		$this->x = $x;
		$this->y = $y;
		$this->strategy = $strategy;
	}

	/*
     *public getter for x
	 */
	public function getX()
	{
		return $this->x;
	}

	/*
	 * public getter for Y
     */
	public function getY()
	{
		return $this->y;
	}
	
	/*the operation function
	 *operates on the numbers
 	 */
	public function operate()
	{
		return $this->strategy->operation($this);
	}

	/*Sets the strategy 
	 *@param Strategy object
     */
	public function setStrategy(Patterns_Strategy_Strategy $s)
	{
		$this->strategy = $s;
	}

	/*gets the Strategy being used
	 * @return Strategy object
     */
	public function getStrategy()
	{
		return $this->strategy;
	}
}
?>
