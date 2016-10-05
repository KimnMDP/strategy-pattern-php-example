<?php
class TestStrategy
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