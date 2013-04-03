<?php
ini_set('display_errors',1);
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 3/4/13
 * Time: 2:25 PM
 * To change this template use File | Settings | File Templates.
 * To get the clear idea of private,public and protected
 */

class MyClass{
    public  $public = 'public';
    protected $protected = 'protected';
    private $private ='private';

    function printHello(){
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new myClass();

//echo $obj->public;
//echo $obj->protected;
//echo $obj->private;
//$obj->printHello();

class MyClass2 extends MyClass{

    protected $protected = 'protected2';

    function  printHello(){
        echo $this->private;
        echo $this->protected;
        echo $this->public;
    }
}

$obj2 = new MyClass2();
//$obj2->private;
echo $obj2->public;
$obj2->printHello();