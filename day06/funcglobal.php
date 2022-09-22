<?php
    $a = 10;
    $b = 20;

    function foo() {
        $c = 200;
        global $a, $b;
        $a = 100;
        $b = 200;
        echo "a = $a and b = $b <br><br>";
    }

    echo "Before Calling Function: <br>";
    echo "a = $a and b = $b <br><br>";

    echo "Inside Function: <br>";
    foo();

    echo "<br>After Calling Function: <br>";
    echo "a = $a and b = $b <br><br>";



