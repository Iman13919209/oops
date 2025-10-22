<?php 

class person{

    public $name,$age;

    function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    }
    function show(){
        echo $this->name ." age is ". $this->age.".\n";
    }
}

$q=new person('iman',21);
$q1=new person('kalyan',22);

$q->show();
$q1->show();

?>