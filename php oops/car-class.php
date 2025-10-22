<?php
class Car{
    public $brand,$model,$date;

    public function __construct($b,$m,$d){
        $this->brand=$b;
        $this->model=$m;
        $this->date=$d;
    }

    function show(){
        echo "The Brand of the car is ".$this->brand.".</br>";
        echo "The Model of the car is '".$this->model."'.</br>";
        echo "The Date of the car is- ".$this->date.".</br></br>";
    }
}

$car1=new Car("Thar","M0227","10/02/2026");
$car1->show();

$car2=new Car("BMW","WB02H83","31/10/2028");
$car2->show();

?>