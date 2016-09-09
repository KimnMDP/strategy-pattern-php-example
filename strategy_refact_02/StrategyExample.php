<?php
class StrategyExample 
{
    public function __construct() 
    {
        $concreteStrategyClassName = 'ConcreteStrategy' . $_REQUEST['strategy'];
        $context = new Context(new  $concreteStrategyClassName);
        $context->update();
    }
}
?>