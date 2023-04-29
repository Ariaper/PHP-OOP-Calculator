<?php

class CalcHandler
{
    public $num1;
    public $num2;
    function __construct()
    {
        $this->num1 = filter_var($_POST['num1'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $this->num2 = filter_var($_POST['num2'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

}