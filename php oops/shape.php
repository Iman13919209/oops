<?php 
abstract class Shape{
    abstract protected function Calculate_area($height,$width);
}

class tringle extends Shape{
    function Calculate_area($height, $width){
        echo "The area of the tringle is ". $height * $width * 1/2 .".</br>";
    }
}
class rectringle extends Shape{
    function Calculate_area($height, $width){
        echo "The area of the tringle is ". $height * $width .".</br>";
    }
}

$obj=new tringle();
$obj->Calculate_area(20,30);

$obj1=new rectringle();
$obj1->Calculate_area(35,40);


?>