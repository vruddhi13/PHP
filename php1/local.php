<?php

    $x = 10;
    function f1(){

        $y =20;  //local to function
        echo "<br>".$y; //display value of y
        echo $x; //will show warning

    }

    echo $x;  //display value of x
    f1();  //function call
    echo $y; //will show warning

?>