<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 3/4/13
 * Time: 5:39 PM
 * To change this template use File | Settings | File Templates.
 */
interface Inter{

    const a="This is constant value";

    public function disp();
}

class A implements Inter{

    function show(){

        echo self::a."<br/>";}

    public function disp(){

        echo "Inside the disp function";}}

$a=new A();

$a->show();

$a->disp();
