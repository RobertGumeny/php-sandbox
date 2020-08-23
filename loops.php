<?php 
    # NOTE Loops - Execute code set number of times

    /*
        For Loop
        While Loop
        Do...While Loop
        Foreach Loop
    */

    // For Loop
    // @params - init; condition; increment

    echo 'For Loop';
    echo '<br>';

    for($i = 0; $i < 10; $i++){
        echo 'Number ' . $i;
        echo '<br>';
    }

    // While Loop
    // @params - condition

    echo 'While Loop';
    echo '<br>';

    $j = 0;
    while($j < 10) {
        echo $j;
        echo '<br>';
        $j++;
    }

    echo 'Do...while Loop';
    echo '<br>';

    // Do...while loop
    // @params - condition

    $k = 0;
    do {
      echo $k;
      echo '<br>';
      $k++;
    }

    while($k < 10);

    echo 'Foreach Loop';
    echo '<br>';

    // Foreach loop for an array
    // @params - name of array, variable for each item

    $people = array('Brad', 'Jose', 'William', 'Robert');

    foreach($people as $person){
      echo $person;
      echo '<br>';
    }

    echo 'Foreach loop with associative array';
    echo '<br>';

    $people2 = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com', 'Robert' => 'robert@gmail.com');

    foreach($people2 as $person2 => $email) {
        echo $person2 . ': ' . $email;
        echo '<br>';
    }
?>