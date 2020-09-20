<?php
    //I want to be a programmer.
    // now start Php and PHP syntax is like that
    echo "Hellow word";
    $brk = "<br/>";
    //php comment is double backslash
    echo "<p>php comment is double backslash</p>";

    echo "<h4>Php Multiple comment is</h4>";
    /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
    */
   
    // You can also use comments to leave out parts of a code line
    $x = 5 /* + 15 */ + 5;
    echo $x;

    echo "<h3>Variables are containers for storing information.</h3>";
    // declear variable with different value 
    $tetvalue = "Hello world!";
    $number = 5;
    $float = 10.5;
    echo  $tetvalue;
    echo "<br>";
    echo $number;
    echo "<br>";
    echo $float;

    // Different Variable

    echo "<h3>PHP has three different variable scopes:</h3>";
    echo "<br>local <br>global <br>static";
    echo "<br>";
    $x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
}

myTest();
echo $y; // outputs 15


?>