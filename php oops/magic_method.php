<?php 

class Magic_method{

public function __construct(){
    echo "this is construct . </br>";
}

public function show(){
    echo "hii..I am iman .</br>";
}

//destruct method.................
public function __destruct(){
    echo "i am destruct .</br>";
}

}

$obj = new Magic_method();
$obj->show();
?>