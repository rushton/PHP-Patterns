<?php
class Patterns_Composite_TextComponent extends Patterns_Composite_Input implements Patterns_Composite_Component
{
	public function draw()
	{
		echo '<input id="'.$this->id.'" type="text" name="'.$this->name.'" />';
	}
}
?>
