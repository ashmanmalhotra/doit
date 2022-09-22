<?php
// Important Array Functions

$arr = [1, 2, 3, 4, 5];
$b = 20;

//Verifying whether it is an array or not
var_dump(is_array($arr));
var_dump(is_array($b));

//Counting the number of elements in an array
echo "<br><br> The count of elements of an array: " . count($arr);

// Whether an element is an array or not
echo "<br><br> Is 10 in array: ";
var_dump(in_array(10, $arr));
echo "<br> Is 3 in array: ";
var_dump(in_array(3, $arr));

// Unique elements in an array
$arr = [1, 2, 3, 4, 5, 1, 2, 2, 4, 5];
echo "<br><br> Unique elements in an array: ";
$arr_unique = array_unique($arr);
print_r($arr_unique);

// Search an Array
$arr = [11, 12, 13, 14, 5, 6, 18, 19, 20];
echo "<br><br> Search an Array: ";
echo array_search(14, $arr) . "<br>";

$arr = ['a'=>'apple', 'b'=>'banana', 'c'=>'cat', 'd'=>'dog'];
echo "Search 'apple' in an Array: ";
echo array_search('apple', $arr) . "<br>";
echo var_dump(array_search('grapes', $arr)) . "<br><br>";

// Search element's index in an array 
$arr = [1, 2, 2, 3, 4];
$ele = 2;
$index = 0;
foreach($arr as $item){
    if($item == $ele){
        echo "The index of the $ele in an array is: $index<br>";
    }
    $index++;
}

// Reverse the Array 
$arr = [1, 2, 3, 4, 5];
for($i=count($arr)-1; $i>=0; $i--){
    echo $arr[$i] . ", ";
}

print_r($arr);

// Reverse the PHP Array - array_reverse()
echo "<br><br>Reverse the Array:";
$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

// Add 3 to all the elements of the Array
echo "<br><br>Modify every element of the array.";
$arr = [1, 2, 3, 4, 5];
for($i=0; $i<count($arr); $i++){
    $arr[$i] += 3;
}
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = ['Mohan', 'Das', "karam", "Chand", "Gandhi"];
$arr_length = [];
foreach($arr as $ele){
    $arr_length[] = strlen($ele);
}
echo "<pre>";
print_r($arr_length);
echo "</pre>";

function strlength($item){
    return strlen($item);
}
$result = array_map('strlen', $arr);
print_r($result);

// Difference of the Array
$arr1 = [1, 2, 3, 4];
$arr2 = [1, 2, 3, 5, 6];
$result = array_diff($arr2, $arr1);
print_r($result);

$arr1 = ['Mohan', 'Das', 'Karam', 'Chand', 'Gandhi'];
$arr2 = ['mohan', 'Das', 'Karam', 'Chand', 'Jagjit', 'Kuldeep'];
$result = array_diff($arr1, $arr2);
print_r($result);

echo "<br><br>";
$arr1 = [1=>11, 2=>22, 3=>33];
$arr2 = [11=>11, 22=>22, 44=>44, 5=>55];
$result = array_diff($arr1, $arr2);
print_r($result);

