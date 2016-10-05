<?php
class Context 
{
    var $strategy;

    public function __construct(StrategyInterface $strategy) 
    {
        $this->strategy = $strategy;
    }

    public function update() 
    {
        $this->strategy->execute();
    }
}
?>