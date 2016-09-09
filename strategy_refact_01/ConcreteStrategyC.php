<?php
require_once "IStrategy.php";

class ConcreteStrategyC implements IStrategy 
{
    public function execute() 
    {
        echo "Called ConcreteStrategyC execute method";
    }
}
?>