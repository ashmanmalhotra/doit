<?php
    function getSum(&$num1, &$num2) {
        echo "The value of Parameter 1 is $num1<br>";
        echo "The value of Parameter 2 is $num2";
        $num1 = 100;
        $num2 = 200;
    }

    $var1 = 10;
    $var2 = 20;
    getSum($var1, $var2);

    echo "<br><br>";
    echo "var1 = " . $var1 . "<br>";
    echo "var2 = " . $var2 . "<br>";


