<?php

class App extends CalcHandler
{
    function add()
    {
        return $this->num1 + $this->num2;
    }
    function sub()
    {
        return $this->num1 - $this->num2;
    }
    function multiply()
    {
        return $this->num1 * $this->num2;
    }
    function divide()
    {
        if ($this->num2 == 0) {
            return "cannot divide by zero";
        }
        return $this->num1 / $this->num2;
    }
}