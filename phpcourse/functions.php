<?php 
    // Void
    function sayHello($name){
        echo "Hello $name";
    }
    // Return value
    function sum($a, $b){
        return $a + $b;
    }
    echo sum(100,1)."</br>";
    // Passing arguments by reference
    function add_five(&$value) {
        $value +=5;
    }
    $num = 5;
    add_five($num);
    echo $num."</br>";

    // assign varable to a function
    $multiple = function ($a, $b) {
        return $a* $b;  
    };
    // arrow function
    $substract = fn($a, $b) => $a -$b;
    echo $substract(7,5);

 


?>