<?php
    // Strings
    /*
    $msg1 = "I am interest in taking \"Nescafe\" today";
    $msg2 = 'I think you would like to have "Darjeeling" tea';
    echo $msg1 . "<br>";
    echo $msg2;
    var_dump($msg2);
    */

    //Integers
    /*
    $num1 = 10;
    echo $num1 . "<br>";
    var_dump($num1);
    */

    //Floating Type
    /*
    $num2 = 102.23;
    echo $num2 . "<br>";
    var_dump($num2);
    */

    //Boolean
    /*
    $bool_true  = true;
    $bool_false = false;
    echo "True: "  . $bool_true  . "<br>";
    echo "False: " . $bool_false . "<br>";
    var_dump($bool_false);
    echo false == 0;
    */

    //Array
    /*$arr = array(10, 20, 30, 40);
    var_dump($arr);
    
    echo "<br>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    */

    //Constants
    /*define("PI", 3.14);
    
    echo PI * 8 * 8;
    */

    /*****************************
    *     Operators
    *****************************/
    // Arithmatic Operators
    /*
    echo "Addition: " . (8 + 9 ). "<br>";
    echo "Subtraction: " . (8 - 9) . "<br>";
    echo "Multiplication: " . (8 * 9) . "<br>";
    echo "Division: " . (8 / 2) . "<br>";
    echo "Modulus (Remainder): " . (8 % 3) . "<br>";
    echo "Exponents: " . (8 ** 3) . "<br>";
    */

    //Assignment Operator
    /*
    $num = 10;
    echo $num , "<br>";          //=> 10
    $num = $num + 20;            // num => 30
    $num += 20;
    echo $num;
    */

    // Comparison Operator
    /*
    var_dump(10 > 20);       //=> False
    var_dump(20 < 30);       //=> True
    var_dump(10 == 10);
    var_dump(10 <> 10);     //=> False
    var_dump(10<>9);        //=> True
    var_dump(10 == "10");   // True
    var_dump(10 == "10Ten"); // True
    echo "<br>";
    var_dump(10 === "10");   // True
    var_dump(10 === "10Ten"); // True
    echo "<br>";
    var_dump(10 >= 10);     //=> True
    */

    // Increment / Decrement Operator
    $a = 10;
    
    $b = $a++; // Post Increment
                // 1. $b = $a;      => 10
                // 2. $a = $a + 1;  => 11
    echo $b . " " . $a;
    echo "<br>";
    $a = 10;
    $b = ++$a;  // Pre Increment
                // 1. $a = $a + 1;  => 11
                // 2. $b = $a;      => 11   
    echo $b . " " . $a;










