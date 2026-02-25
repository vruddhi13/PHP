<?php
    $x = 10;

    function f1(){

        $y = 20;  //local to function
        global $x;  //global to function
        echo "<br>".$x; //display value of x
        echo "<br>".$y; //display value of y
    }

    echo $x; //display value of x
    echo f1(); //function call
?>