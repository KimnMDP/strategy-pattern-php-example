<?php
require_once "IStrategy.php";

class Context 
{
    var $strategy;

    public function __construct(IStrategy $strategy) 
    {
        $this->strategy = $strategy;
    }

    public function update() 
    {
        $this->strategy->execute();
    }
}
?>