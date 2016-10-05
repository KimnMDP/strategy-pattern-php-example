<?php
class ConcreteStrategyA implements StrategyInterface
{
    public function execute()
    {
        echo "Called ConcreteStrategyA execute method";
    }
}
?>