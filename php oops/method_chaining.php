<?php 
class Method_chaining{
    public function first(){
        echo "this is first method . </br>";
        return $this;
    }

     public function second(){
        echo "this is second method . </br>";
        return $this;
    }

     public function third(){
        echo "this is third method . </br>";
    }
}

$obj = new Method_chaining();
$obj->first()->second()->third();

?>