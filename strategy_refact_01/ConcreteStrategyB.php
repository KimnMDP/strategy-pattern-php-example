<?php
require_once "IStrategy.php";

class ConcreteStrategyB implements IStrategy 
{
    public function execute() 
    {
        echo "Called ConcreteStrategyB execute method";
    }
}
?>