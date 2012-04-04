<?php
abstract class Patterns_Iterator_Decorator implements Patterns_Iterator_Iterator
{
	private $iterator;
	
	public function __construct(Patterns_Iterator_Iterator $itr)
	{
		$this->iterator = $itr;	
	}

	public function next(){return $this->iterator->next();}
	public function hasNext(){return $this->iterator->hasNext();}
	public function first(){return $this->iterator->first();}
	public function current(){return $this->iterator->current();}

	
}
?>
