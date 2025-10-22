<?php 
interface A{
    function hello($n);
}
interface B{
    function hi($a);
}

interface C{
    function bye();
}

class D implements A,B,C{
    public function hello($n){
        echo "hello ".$n.'</br>';
    }
    public function hi($a){
        echo "hi ".$a.'</br>';
    }
    public function bye(){
        echo "bye ";
    }
}

$e1=new d();
$e1->hello('iman');
$e1->hi('sima');
$e1->bye();
?>