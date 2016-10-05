<?php
interface IStrategy 
{
    public function execute();
}

class ConcreteStrategyA implements IStrategy 
{
    public function execute()
    {
        echo "Called ConcreteStrategyA execute method";
    }
}

class ConcreteStrategyB implements IStrategy 
{
    public function execute() 
    {
        echo "Called ConcreteStrategyB execute method";
    }
}

class ConcreteStrategyC implements IStrategy 
{
    public function execute() 
    {
        echo "Called ConcreteStrategyC execute method";
    }
}

class Context 
{
    public function __construct(IStrategy $strategy) 
    {
        $this->strategy = $strategy;
    }

    public function update() 
    {
        $this->strategy->execute();
    }
}

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

new StrategyExample;
?>