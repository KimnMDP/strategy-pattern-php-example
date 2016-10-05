<?php
isset($_REQUEST['strategy']) ? $strategy = $_REQUEST['strategy'] : $strategy = null;
switch ($strategy) 
{
    case 'A':
        echo "Called ConcreteStrategyA execute method";
        break;
    case 'B':
        echo "Called ConcreteStrategyB execute method";
        break;
    case 'C':
        echo "Called ConcreteStrategyC execute method";
        break;
    case 'D':
        echo "Called ConcreteStrategyD execute method";
        break;
    case 'E':
        echo "Called ConcreteStrategyE execute method";
        break;
    case 'F':
        echo "Called ConcreteStrategyF execute method";
        break;
    case 'G':
        echo "Called ConcreteStrategyG execute method";
        break;
    case 'H':
        echo "Called ConcreteStrategyH execute method";
        break;
    case 'I':
        echo "Called ConcreteStrategyF execute method";
        break;
    case 'J':
        echo "Called ConcreteStrategyJ execute method";
        break;
    
    default:
        echo "Called ConcreteStrategyA execute method";
        break;
}
?>