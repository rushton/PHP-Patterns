<?php
class Patterns_Composite_SubmitComponent extends Patterns_Composite_Input implements Patterns_Composite_Component
{
	public function draw()
	{
		echo '<input type="submit" name="'.$this->name.'" id="'.$this->id.'" />';
	}
}
?>
