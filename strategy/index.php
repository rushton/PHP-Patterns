<?php
include 'twonumbers.class.php';
include 'strategy.class.php';
include 'addstrategy.class.php';
include 'subtractstrategy.class.php';
include 'multiplystrategy.class.php';

$tn = new Patterns_Strategy_TwoNumbers(20,3,new Patterns_Strategy_AddStrategy());

//test add strategy
echo $tn->getX().'+'.$tn->getY().'='.$tn->operate().'<br/>';

//test subtract strategy
$tn->setStrategy(new Patterns_Strategy_SubtractStrategy());
echo $tn->getX().'-'.$tn->getY().'='.$tn->operate().'<br/>';

//test multiply strategy
$tn->setStrategy(new Patterns_Strategy_MultiplyStrategy());
echo $tn->getX().'*'.$tn->getY().'='.$tn->operate().'<br/>';
?>
