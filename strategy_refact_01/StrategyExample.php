<?php
require_once "Context.php";
require_once "ConcreteStrategyA.php";
require_once "ConcreteStrategyB.php";
require_once "ConcreteStrategyC.php";

class StrategyExample 
{
    public function __construct() 
    {
    	(isset($_REQUEST['strategy']) AND !empty($_REQUEST['strategy'])) ? 
    		$strategy = $_REQUEST['strategy'] : $strategy = 'A';
        $concreteStrategyClassName = 'ConcreteStrategy' . $strategy;
        $context = new Context(new  $concreteStrategyClassName);
        $context->update();
    }
}
?>