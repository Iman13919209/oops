<?php
class Rectangle{
    public $height,$width;
    
    function __construct($h,$w){
        
        $this->height=$h;
        $this->width=$w;
    }
    
    function area(){
        echo "The area of this rectengle is ".$this->height*$this->width.".</br>";
    }
    function peremeter(){
        echo "The peremeter of this rectengle is ". 2*($this->height+$this->width).".</br></br>";
    }
    
}

$obj=new Rectangle(20,34);
$obj->area();
$obj->peremeter();

$home=new Rectangle(40,48);
$home->area();
$home->peremeter();
?>
