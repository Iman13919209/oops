<?php 
class base{
    public $name = 'iman';
    public function show($a,$b){
        echo $a + $b;    
    }
}

class derived extends base{
    public $name = 'iman kalyan';
    public function show($a,$b){
        echo $a * $b;    
    }
}

$e1=new derived();
$e1->show(10,20);

?>