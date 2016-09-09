<?php
class ConcreteStrategyA implements IStrategy 
{
    public function execute()
    {
        echo "Called ConcreteStrategyA execute method";
    }
}
?>