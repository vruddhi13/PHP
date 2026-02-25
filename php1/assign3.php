<?php

    //for loop to use as a "Balance amount":

    echo "Using for loop to dispplay Balance Amount : <br>";
    $amt = array(2000,5000,1000,50);
    $can = count($amt);
    for($i=0 ; $i<$can ; $i++)
    {
       echo $amt[$i]."<br>";
       
    }
    echo "<br><br>";

    //foreach to use as a "Balance amount":
        echo "Using foreach to dispplay Balance Amount : <br>";
        $amt = array(2000,5000,1000,50);
        foreach($amt as $val)
        {
            echo $val."<br>";
        }
        echo "<br>";

        
        //"Multidimentional array" in using a asort and arsort array for ascending and descending
        // OR using a ksort and krsort array for ascending and descending.

        $balance= array(
            "user1"=>array(
                "debit"=>2,
                "credit"=>3,
                "balance"=>1,
            ),
            "user2"=>array(
                "debit"=>15,
                "credit"=>17,
                "balance"=>2
            ));

            //ksort array ascending and descending
            ksort($balance);
            print_r($balance);
            
            echo "<br><br>";

            asort($balance);
            print_r($balance);
            
            echo "<br><br>";

            krsort($balance);
            print_r($balance);
            
            echo "<br><br>";

            arsort($balance);
            print_r($balance);
            
            echo "<br><br>";

            //set the proper balance of credit and debit

            $n = array();
            foreach($balance as $o){
                $v = $o;
                $v["balance"]=abs($o["debit"]-$o["credit"]);
                $n[]=$v;

            }
          $balance=$n;
          asort($n);
          print_r($n);

           
?>