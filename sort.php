<?php
//Manali Surve

$str = 'amgc xyz top';

echo "Given Data: " . "<p>" . $str . "</p>"; // Print Given Data

$str_array = explode(' ', strtolower($str)); // Exploding String to Array
    //print_r (explode(" ",strtolower($str)));

    sort($str_array); // Applying sort function on array

echo "<p>Sorted Data: </p>";
    echo implode(' ', $str_array);  // Imploding array to string & Print
?>