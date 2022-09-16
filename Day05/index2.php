<?php
    //Logical Operator
    /*
    var_dump( true && false );
    echo "<br>";
    var_dump( true || false || false);
    echo "<br>";
    var_dump( (5>10) || (6<20) );
    var_dump( true xor false );
    */

    //String Operator
    /*
    $fname = "Ashman";
    $lname = "Malhtora";
    //$fullname = "Fullname: " . $fname . " " . $lname;
    $fullname = $fname;
    $fullname .= " ";
    $fullname .= $lname;
    echo $fullname;    
    */

    //Ternary Operator  ?:
    /*
    $a = 100;
    $b = 20;
    $max = $a > $b ? $a : $b;
    echo $max;
    */


    /****************************
     *  Conditional Statement
     ****************************/
    // If statement
    /*
    if((10 > 20) && (5 < 10)){
        echo "True Block";
    }
    else{
        echo "False Block";
    }
    */

    /*
    $x = 9;
    $y = 3;
    $result = ($x**2) + ($x**4) - (3 * ($y**3));
    echo $result;
    if ($x > 100){
        echo "<br>$result greater than 100.";
    }
    else{
        echo "<br>$result smaller than 100.";
    }*/

    $a = 1;
    $b = 3;
    $c = 2;
    if($a > $b){
        if($a > $c){
            echo "$a is the greatest number.";
        }
        else{
            echo "$c is the greatest number.";
        }
    }
    elseif($b > $c){
        echo "$b is the greatest number.";
    }
    else{
        echo "$c is the greatest number.";
    }




















