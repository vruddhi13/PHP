<?php

    //simple sort array in alphabetically to ascending
    $car = array("BMW","Honda","KN");
    sort($car);
    
    $clength = count($car);
    for($i=0; $i<$clength ; $i++)
    {
        echo $car[$i];
        echo "<br>";
    }

    echo "<br>";
    //sort in numeric to ascending
    $num = array(4,7,1,8,3);
    sort($num);

    $var = count($num);
    for($i=0 ; $i<$var ;$i++){
        echo $num[$i];
        echo "<br>";
    }
    echo "<br>";

    //simple rsort array in alphabetically to descending
    $car = array("BMW","Honda","KN","Volvo");
    rsort($car);
    
    $clength = count($car);
    for($i=0; $i<$clength ; $i++)
    {
        echo $car[$i];
        echo "<br>";
    }

    echo "<br>";

    //rsort in numeric to descending
    $num = array(4,7,1,8,3,2,34);
    rsort($num);

    $var = count($num);
    for($i=0 ; $i<$var ;$i++){
        echo $num[$i];
        echo "<br>";
    }
    echo "<br>";

    //asort ascending order ; according to the value:

    $age = array("peter"=>"35","Ben"=>"21","jack"=>"43");
    asort($age);

    foreach($age as $x=>$value){
        echo "Key= ".$x." ,  value= ".$value;
        echo "<br>";
    }
    echo "<br>";

    //asort ascending order ; according to the key:
    $age = array("peter"=>"35","Ben"=>"21","jack"=>"43");
    ksort($age);
    foreach($age as $y => $key){
        echo "Key= ".$y." ,  value= ".$key;
        echo "<br>";
    }
    echo "<br>";

    //arsort descending order; according to the value:

    $marks = array("Krish"=>"87","peter"=>"90","nini"=>"40","rud"=>"100");
    arsort($marks);

    foreach($marks as $u => $value){
        echo "Key= ".$u." ,  value= ".$value;
        echo "<br>";
    }
    echo "<br>";

    //arsort descending order; according to the key:

    $marks = array("Krish"=>"87","peter"=>"90","nini"=>"67","vru"=>"100");
    krsort($marks);

    foreach($marks as $i => $keys){
        echo "Key= ".$i." ,  value= ".$keys;
        echo "<br>";
    }

?>