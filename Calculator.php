<?php
/**
 * Created by JetBrains PhpStorm.
 * User: relan
 * Date: 7/22/14
 * Time: 1:12 PM
 * To change this template use File | Settings | File Templates.
 */

<?php
/*
calculator class
-- properties
-- int num1
-- Operation oper
-- num 2


methods:
-- digit(int)
-- operation (Operator)
-- parseInput (since we've to take care of associativity we'll need to parse the equation)


Operator
methods: int calculate (int, int)

addition(),subtract(), multiply(), divide()
*/

require_once("Operation.php")
class Calculator
{
$display;
$num_1;
$operation;
$num_2;

    function __construct ($display, $num_1, $operation, $num_2)
    {
        $this->display = $display;
        $this->num_1   = $num_1;
        $this->operation = $operation;
        $this->num_2 = $num_2;
    }

    function digit($n)
    {
        return new Calculator(
            ($this->num_2 * 10) + $n, $this->num_1, $this->operation, ($this->num_2 * 10) + $n );
    }

    function operation($operation)
    {   }

   function parseInput($input)
}

abstract class Operation
{
    //evaluate the appropriate operation
    abstract protected function evaluate($n1, $n2);
}

class Plus extends Operation
{

    function evaluate($n1, $n2)
    {
        return $n1 + $n2;
    }
}

class Subtract extends Operation
{

    function evaluate($n1, $n2)
    {
        return $n1 - $n2;
    }
}

//similar implementation of all the other operations
class Multiply extends Operation
{

}

class Divide extends Operation
{

}
.....