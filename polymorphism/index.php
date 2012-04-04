<?php
	//eval 1 + 2 * 3
	$one = new Patterns_Polymorphism_ValueNode(1);
	$two = new Patterns_Polymorphism_ValueNode(2);
	$three = new Patterns_Polymorphism_ValueNode(3);

	$multiplier = new Patterns_Polymorphism_MultiplicationNode($two,$three);

	$adder = new Patterns_Polymorphism_AdditionNode($one,$multiplier);

echo '1 + 2 * 3 = '.$adder->evaluate();

echo '<br/>'.$adder->render();
?>
