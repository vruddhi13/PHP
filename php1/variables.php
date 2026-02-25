<?php

    //$$ variable:

        $x = "abc";
        $$x=200;
        echo $x."<br>";
        echo $$x."<br>";
        echo $abc; //show the upper value twice
        echo $abc;  //same as
        echo "<br><br>";

    //static variable :
        function static_var(){
            static $num=3;
            $num2 =6;
            $num++;
            $num2++;
            echo "static : ".$num."<br>";
            echo "static : ".$num2."<br>";
        }
         static_var();
         echo "<br><br>";
         
         //for loop :

            for($i=1 ; $i<=9 ; $i++)
            {
                echo $i;
            }
            echo "<br>";

?>