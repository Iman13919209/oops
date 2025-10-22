<?php 
trait test{
    public $n='iman';
    public function show(){
        echo $this->n;
    }

}
trait hello{
    public $n='hallo';
    public function show(){
        echo $this->n;
    }

}
trait bye{
    public $n='bye';
    public function show(){
        echo $this->n;
    }

}
class a{
    use test;
}
class b{
    use hello,test;
}
class c{
    use hello,test,bye;
}

$e1 = new a();
$e1->show();
echo '</br>';
$e2 = new b();
$e2->show();
echo '</br>';
$e2 = new c();
$e2->show();

?>