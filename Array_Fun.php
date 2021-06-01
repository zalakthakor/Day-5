<?php
//count
$arr = array('Apple','Banana','mango','PineApple','Grapes');
echo count($arr);
//array_count_values
$newarr = array_count_values($arr);
foreach($newarr as $key => $value){
    echo "<br/>$key - <strong>$value</strong>";
}
$a=array(1,3,2,4,5);//sum
echo "<br/>".array_sum($a);
echo "<br/>".array_product($a);//product
$revarr=array_reverse($a);
print_r($revarr); //reverse
$temp=in_array(2,$a);
echo "</br>".$temp;    //true false
$indexofarray=array_rand($a);
echo "</br>".$arr[$indexofarray]; //random
$indexofarray=array_rand($a,3);
foreach($indexofarray as $key => $value)
{
    echo "</br>$key-<strong>".$a[$value]."</strong>";//multiple
}
print_r(array_unique($a));
