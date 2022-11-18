<?php
// Удаление повторяющихся элементов

$array = array('a', 'b', 'b', 'c', 'c', 0, '0');
$array = array_unique($array);
print_r($array);
// На экране отобразится: Array ( [0] => a [1] => b [3] => c [5] => 0 )   


// Удалине элемента
$array = array('name' => 'Иван', 'lastname' => 'Иванов');
 
if(($key = array_search('Иванов',$array)) !== FALSE){
     unset($array[$key]);
}


?>