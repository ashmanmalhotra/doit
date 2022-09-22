<?php
$fruits = ['apple'=>101,
            'banana'=>102,
            'orange'=>103,
            'grape'=>104,
            'melon'=>105];

foreach($fruits as $ind => $value){
    echo $ind . " " . $value . "<br>";
}

echo $fruits['apple'];


