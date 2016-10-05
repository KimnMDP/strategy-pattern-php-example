<?php
require_once "Context.php";
require_once "ConcreteStrategyA.php";
require_once "ConcreteStrategyB.php";
require_once "ConcreteStrategyC.php";

class StrategyExample 
{
    public function __construct() 
    {
        isset($_REQUEST['strategy']) ? $strategy = $_REQUEST['strategy'] : $strategy = 'A';
        $className = 'ConcreteStrategy' . $strategy;
        class_exists($className) ? : $className = 'ConcreteStrategyA';
        $context = new Context(new  $className);
        $context->update();
    }
}
?>