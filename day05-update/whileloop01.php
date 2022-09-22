<?php
    $fruits = ["apple", "banana", "orange", "grape", "mango"];
    $length = count($fruits);
    $i = 0;
    echo "<ul>";
    while($i < $length){
        echo "<li>" . $fruits[$i] . "</li>";
        $i++;
    }
    echo "</ul>";
