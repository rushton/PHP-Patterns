<?php
abstract class Patterns_Composite_Input
{
	protected $name;
	protected $id;
	protected $extra;

	public function __construct($name,$id = null,$extra = null)
	{
		$this->name  = $name;	
		$this->id    = $id;
		$this->extra = $extra;
	}

}

?>
