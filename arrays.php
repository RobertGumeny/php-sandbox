<?php 
    # NOTE Array - variable that holds multiple values
    /* 
      - Indexed Array
      - Associative Array
      - Multidimensional
    */

    // Indexed Arrays

    $people = array('Kevin', 'Jeremy', 'Sara');
    echo $people[0];
    echo '<br>';

    $ids = array(23, 55, 12);
    echo $ids[2];
    echo '<br>';

    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $cars[1];
    $cars[3] = 'Chevy';
    echo '<br>';
    echo $cars[3];
    $cars[] = 'BMW'; // If you don't know the length of your array use empty brackets.
    echo '<br>';
    echo $cars[4];
    echo '<br>';

    echo count($cars); // Counts total number of items in array
    echo '<br>';
    print_r($cars); // Prints out entire Array
    echo '<br>';
    var_dump($cars); // Prints out detailed information about each variable inside the array
    echo '<br>';

    // Associative Arrays

    $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    echo $people2['Brad'];
    echo '<br>';

    $ids2 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
    echo $ids2[44];
    echo '<br>';

    $people2['Jill'] = 42;
    echo $people2['Jill'];
    echo '<br>';

    // Multi-dimensional arrays

    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Honda', 40, 25)
    );

    echo $cars[1][0];
?>