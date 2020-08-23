<?php
    # NOTE Function - block of code that can be repeatedly used throughout code

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */

    // Create a simple function

    function simpleFunction(){
        echo 'Hello World!';
        echo '<br>';
    }

    // Run simple function

    simpleFunction();

    // Function with param/arg
    // Can provide a default param ($name = 'World')

    function sayHello($name){
        echo "Hello $name!";
        echo '<br>';
    }

    sayHello('Joe');
    sayHello('Sara');
    sayHello('Tim');

    // Return a value

    function addNumbers($num1, $num2){
      return $num1 + $num2;
    }

    echo addNumbers(2, 3);
    echo '<br>';

    // Pass argument by reference

    $myNum = 10;

    function addFive($num){
      $num += 5;
    }

    function addTen(&$num){
      $num += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);
    
    echo "Value: $myNum<br>";
?>