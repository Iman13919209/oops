<?php
class LibraryItem{
    public $name,$type;

    public function __construct($n,$t){
        $this->name=$n;
        $this->type=$t;
  
    }

    public function show(){
        echo "Item Name is ".$this->name.", Type is ".$this->type.".</br>";
    }
}

class Book{
    public $name,$author,$publish_date;
     public function __construct($n,$a,$p){
        $this->name=$n;
        $this->author=$a;
        $this->publish_date=$p;
  
    }

    public function show(){
        echo "Book Name is ".$this->name.", Author is ".$this->author." and publish date is ".$this->publish_date.".</br>";
    }

}

Class DVD{
    public $brand,$storage;

     public function __construct($b,$s){
        $this->brand=$b;
        $this->storage=$s;
  
    }

    public function show(){
        echo "DVD Brand is ".$this->brand.", storage is ".$this->storage.".</br>";
    }
}

$com=new LibraryItem("Samsung","Computer");
$com->show();

$iron=new Book("Iron Man","Tony Stark","2008");
$iron->show();

$snap=new Dvd("Snapdragon","512gb");
$snap->show();

?>