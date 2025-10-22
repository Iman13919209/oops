<?php

abstract class a{

    public $name='iman';
    abstract protected function add($a,$b);  //we can declare here the function but cannot implement


    
}
//need to make a derived class where can implement

class b extends a{
    public function add($a,$b){ //MUST be declare the parameters
        echo $a+$b.'</br>';
        echo 'iman';
        
    }
}

$e1 = new b();
$e1->a=10;
$e1->b=20;
$e1->add(20,40);

?>