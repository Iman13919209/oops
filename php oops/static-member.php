<?php 
class base{

public static $name = "simsim";
public static function show(){
    echo self::$name;
    
}

}

class derived extends base{
    public static function shw(){
        echo parent::$name;
    }
}
// echo base::$name;
echo "</br>";
echo derived::shw();

?>