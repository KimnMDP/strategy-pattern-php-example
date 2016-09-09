<?php
require_once "Context.php";
require_once "ConcreteStrategyA.php";
require_once "ConcreteStrategyB.php";
require_once "ConcreteStrategyC.php";

/*Factory!*/
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