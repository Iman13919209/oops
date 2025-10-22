<?php 

// class A{
//     public $a,$b;
//     public function __construct($a,$b){
//         $this->a=$a;
//         $this->b=$b;
        
//     }

//     function sum(){
//         print($this->a + $this->b.'</br>');
//     }
// }

// class B extends A{
//     public $name,$age,$roll;

//     public function __construct($name,$age,$roll,$a,$b){
//         parent::__construct($a,$b);
//         $this->name=$name;
//         $this->age=$age;
//         $this->roll = $roll;
        

//     }
//     function show(){
        
//         echo $this->name." age is ".$this->age  .'</br>'  ;
//     }

//     function show1(){
//         print($this->name." roll is ".$this->roll.'</br>');
//     }


// }

// $s = new A(100,400);
// $s->sum();

// $obj = new B("iman",22,196,10,30);
// $obj->sum();
// $obj->show();
// $obj->show1();




interface A{
  
    
    function sum($a,$b);
}

interface B{
     function  mul($a,$b);
}

interface C{
     function sub($a,$b); 
}

class D implements A,B,C{
    function sum($n,$m){
        echo $n+$m.'</br>';
    }

    function mul($n,$m){
        echo $n*$m .'</br>';
    }

    function sub($n,$m){
        echo $n-$m;
    }
}

$obj = new D();
$obj->sum(10,20);
$obj->mul(10,20);
$obj->sub(10,20);


?>