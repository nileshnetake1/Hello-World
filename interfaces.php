<?php

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
