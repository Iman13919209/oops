<?php 
function fruit(array $name){
   foreach($name as $names)
        echo $names ."</br>";
    
}

$n =[20,"iman","kalyan"];
fruit($n);

?>