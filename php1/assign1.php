<?php
    $num1 = 10;
    function Airthoperation(){

        $num2 = 20;
        $sum = 0;
        global $num1;
        $sum = $num1+$num2;
        echo "Sum of num1 and num2 : ".$sum."<br>";
    }
    echo Airthoperation();
    echo "<br>";

    function Airthoperation1(){

        $num2 = 20;
        $sub = 0;
        global $num1;
        $sub = $num1-$num2;
        echo "Substraction of num1 and num2 : ".$sub."<br>";
    }
    echo Airthoperation1();
    echo "<br>";

    function Airthoperation2(){

        $num2 = 20;
        $div = 0;
        global $num1;
        $div = $num1/$num2;
        echo "Divsion of num1 and num2 : ".$div."<br>";
    }
    echo Airthoperation2();
    echo "<br>";

    function Airthoperation3(){

        $num2 = 20;
        $multi = 0;
        global $num1;
        $multi = $num1*$num2;
        echo "Multipalication of num1 and num2 : ".$multi."<br>";
    }
    echo Airthoperation3();
    echo "<br>";

    function Airthoperation4(){

        $num2 = 20;
        $moduel = 0;
        $num3 = 4;
        global $num1;
        $moduel = ($num1+$num2)%$num3;;
        echo "Moduel of num1 and num2 : ".$moduel."<br>";
    }
    echo Airthoperation4();
    echo "<br>";


    //post increment and decrement : 

    function InDecOperation(){

        static $pre=0;
        $pre++;
        echo "Pre increment : ".$pre."<br>";
        
    }
    echo InDecOperation();
    echo InDecOperation();
    echo InDecOperation();
    echo InDecOperation();
    echo InDecOperation();

    echo "<br>";
    
    function InDecOperation1(){

        static $pre=0;
        $pre--;
        echo "Pre Decrement : ".$pre."<br>";
        
    }
    echo InDecOperation1();
    echo InDecOperation1();
    echo InDecOperation1();
    echo InDecOperation1();
    echo InDecOperation1();
    echo "<br>";
    
    //post increment and decrement : 

    function InDecOperation2(){

        static $post=0;
        $post++;
        echo "Post increment : ".$post."<br>";
        
    }
    echo InDecOperation2();
    echo InDecOperation2();
    echo InDecOperation2();
    echo InDecOperation2();
    echo InDecOperation2();

    echo "<br>";
    
    function InDecOperation3(){

        static $post=0;
        $post--;
        echo "Post Decrement : ".$post."<br>";
        
    }
    echo InDecOperation3();
    echo InDecOperation3();
    echo InDecOperation3();
    echo InDecOperation3();
    echo InDecOperation3();
    
    echo "<br>";

    // String concat function

    function stringconcat(){

        $x = "vruddhi";
        $y = "kukadiya";
        $r = null;
        $r=$x.$y;
        echo "String concat with full name : ".$r."<br>";
    }
    echo stringconcat();


    // call the function : 

    function multiply_numbers($a,$b){
        return $a*$b;
    }
    $result1 = multiply_numbers(5,8);
    $result2 = multiply_numbers(1,9);
    echo "result 1:  $result1 <br>";
    echo "result 2 : $result2 <br>";

    echo "<br><br>";

    //double and single function :

    function double(){
        $name = "Alice";
        echo "Hello $name!";
    }
    double();

    echo "<br><br>";

    function single(){
        $name = "Alice";
        echo 'Hello $name!';
    }
    single();

    echo "<br><br>";
    
    //$$ sign :

    $variable ="sum";
    $$variable = 10+20;

    $product =$sum*3;
    $half = $sum/2;

    echo "sum : $sum<br>";
    echo "product : $product<br>";
    echo "half : $half<br>";
    
?>