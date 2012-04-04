<?php
class Patterns_Composite_FormComposite implements Patterns_Composite_Component 
{
	/*
  	 * Array of components
 	 */
	private $components;

	public function __construct()
	{
		$component = array();
		return $this;
	}

	/**
	 * draws children components
 	 * @return void
     */
	public function draw()
	{
		echo '<form id="frm" action="/">';
		foreach($this->components as $component)		
		{
			$component->draw();
		}
		echo '</form>';
	}

	/**
	 * adds component to the component array
	 * @return self
	 */
	public function add(Patterns_Composite_Component $component)
	{
		$this->components[] = $component;
		return $this;
	}
}
?>
