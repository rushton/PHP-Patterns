<?php

$composite = new Patterns_Composite_FormComposite();
$composite2 = new Patterns_Composite_FormComposite();
$composite->add(new Patterns_Composite_TextComponent('test'))
		  ->add(new Patterns_Composite_TextComponent('test2'))
		  ->add(
			 $composite2->add(new Patterns_Composite_SubmitComponent('hello')));
$composite->draw();

?>
