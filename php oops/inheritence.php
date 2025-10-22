<?php

class employee{

    public $name,$age,$sallary;

    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->sallary=$s;
    }

    function show(){
        echo $this->name .", age-" .$this->age." sallary-$". $this->sallary.".";
    }
}

class manager extends employee{

    public $s1,$s2,$s3;

    function show(){
        echo $this->name .", age-" .$this->age." sallary-". $this->sallary.".</br>";
        echo "Total sallary ".$this->s1 + $this->s2 + $this->s3;
    }
}

$e1= new manager("iman",21,6359);
$e2= new employee("iman",22,6859);
$e1->s1=10;
$e1->s2=20;
$e1->s3=30;
$e1->show();
$e2->show();

?>