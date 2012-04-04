<?php
class Patterns_Iterator_ArrayIterator implements Patterns_Iterator_Iterator
{
	/**
	 *Array passed in
	 */
	private $array;
	/**
	 * int - position of the iterator
	 */
	private $position;
	
	public function __construct($array)
	{
		$this->array = $array;	
		$this->position = 0;
	}

	public function next()
	{
		if(!$this->hasNext())
		{
			throw new Exception('Array out of bounds');
		}	
		
		return $this->array[$this->position++];
	}

	public function current()
	{
		return $this->array[$this->position];
	}

	public function hasNext()
	{
		return (sizeof($this->array)-1) >= $this->position;
	}

	public function first()
	{
		return $this->array[0];
	}	
}	
?>
