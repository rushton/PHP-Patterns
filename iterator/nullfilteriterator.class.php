<?php
class Patterns_Iterator_NullFilterIterator extends Patterns_Iterator_Decorator
{
	public function next()
	{
		if(parent::current() == null)
		{
			parent::next();
		}
		else
		{
			return parent::next();
		}
	}
}
