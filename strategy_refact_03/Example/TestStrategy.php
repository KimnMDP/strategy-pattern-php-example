<?php
class TestStrategy
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