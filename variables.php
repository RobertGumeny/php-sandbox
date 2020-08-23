<?php
// Single line comment

# Single Line Comment

/*
    Multi-line comment
*/

# NOTE VARIABLES
/*
  - Prefix with a $
  - Must start with a letter or an underscore
  - Only letters, numbers, and underscores
  - Case sensitive ($Output $= $output)
*/

    $output = 'Hello World!';
    echo $output;
    echo '<br>';

# NOTE DATA TYPES
/*
    String - "" or ''
    Integers
    Floats
    Booleans
    Arrays
    Objects
    Null
    Resource
*/

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $string1 = 'My name is ';
    $string2 = 'Robert';
    $greeting = $string1 . $string2; // Concaetnate with a . instead of a +
    

    $float1 = 4.4;
    $bool = true;

    echo $sum;
    echo "<br>";
    echo $greeting;
?>