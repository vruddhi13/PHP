<?php
    //multiplication of 52 number
    $number=52;
    for($i=1 ; $i<=10 ;$i++)
    {
        $result = $number."*".$i."=".$number*$i."<br>";
        echo $result;
    }

    echo "<br>";
    //range of code

    //person eligible or not :

    $age = 18;
    if($age>=18)
    {
        echo "The person is eligible for vote ";
    }
    else
    {
        echo "the person is not eligible for vote";
    }

    echo "<br>";

    //for loop for pattern
// 1
// 12
// 123
// 12345
    for($i=1 ; $i<=5 ;$i++)
    {
        for($j=1 ; $j<=$i ; $j++)
        {
            echo $j;
        }
        echo "<br>";
    }

    echo "<br>";

// 1 2  3  4 5
// 6 7  8  9
// 10 11 12
// 13 14
// 15
    $number=1;
    $rows=5;
    for($i=1 ; $i<=$rows ;$i++)
    { 
        for($j=$i ; $j<=$rows ; $j++)
        {
            echo $number." ";
            $number++;
            
        }
        echo "<br>";
    }
    echo "<br>";
// 1
// 2 3
// 4 5 6 
// 7 8 9 10

    $number= 1;
    for($i=1; $i<=4 ; $i++)
    {
        for($j=$i; $j<=4 ; $j++)
        {
            echo $number." ";
            $number++;
        }
        echo "<br>";
    }
    echo "<br><br>";
    //switch case : Greater than

    $num1=10;
    $num2=5;
    switch(true){
        case($num1<$num2):
            echo "num2 is greater than num1";
            break;
        case($num1>$num2):
            echo "num1 is greater than num2";
            break;
        default:
            echo "num1 and num2 is equal";
            break;
    }

    echo "<br>";

    $num1=10;
    $num2=30;
    switch(true){
        case($num1<$num2):
            echo "num2 is greater than num1";
            break;
        case($num1>$num2):
            echo "num1 is greater than num2";
            break;
        default:
            echo "num1 and num2 is equal";
            break;
    }

    echo "<br>";

    $num1=30;
    $num2=30;
    switch(true){
        case($num1<$num2):
            echo "num2 is greater than num1";
            break;
        case($num1>$num2):
            echo "num1 is greater than num2";
            break;
        default:
            echo "num1 and num2 is equal";
            break;
    }

    echo "<br><br>";

    $num=500;
    switch(true){
        case($num>=99 && $num<=999):
            echo "num is between to 99 and 999";
            break;
        default:
            echo "num is not between 99 and 999";
            break;

    }

?>