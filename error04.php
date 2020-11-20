<?php
// PHP7 takes errors as exceptions.
class MathOperations
{
    protected $n = 10;

    // 求余数运算，除数为 0，抛出异常
    public function doOperation(): string
    {
        try {
            $value = $this->n % 0;
            return $value;
        } catch (DivisionByZeroError $e) {
            return $e->getMessage();
        }
    }
}

$mathOperationsObj = new MathOperations();
print($mathOperationsObj->doOperation());
