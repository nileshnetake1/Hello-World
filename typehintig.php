<?php
class MyClass {
    public $var = 'Hello World';
}

/**
 * A test function
 *
 * First parameter must be an object of type MyClass
 */
function myFunction(MyClass $foo) {
    echo $foo->var;
}

// Works
$myclass = new MyClass;
myFunction($myclass);

