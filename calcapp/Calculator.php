<?php

namespace App;

class Calculator{
    
    public function add($var1, $var2) {
        return $var1 + $var2;
    }

    public function subtract($var1, $var2) {
        return $var1 - $var2;
    }

    public function multiply($var1, $var2) {
        return $var1 * $var2;
    }

    public function divide($var1, $var2) {
        return $var1 / $var2;
    }
}