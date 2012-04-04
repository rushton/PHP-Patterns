<?php
$array = array(1,2,3,null,4,5,6,7,8);
$iterator = new Patterns_Iterator_NullFilterIterator(new Patterns_Iterator_ArrayIterator($array));

while($iterator->hasNext())
{
	echo $iterator->next().' ';
}
?>
