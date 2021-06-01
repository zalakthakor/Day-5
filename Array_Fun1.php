<?php
$a=array('Dad','Mom','Bro','Sister');
$b=array(10,30,40,20);
$merge=array_merge($a,$b);//merge
print_r($merge);
$check=array_search('Bro',$a);
echo "</br>".$check;
$year=range(1900,2030);
echo "</br>.<select>";
foreach ($year as $value)//range
{
    echo"<option>$value</option>";
}
echo "</select>";
echo "</br>";
sort($b);//sort
print_r($b);
echo "</br>";
rsort($b);
print_r($b);
echo "</br>";
asort($b);
print_r($b);
$arr=array(
    "Banana"=>"Fruit",
    "Potato"=>"Vegetable",
    "Almond"=>"DryFruit");
ksort($arr);
foreach($arr as $key => $value){
    echo "<br/>$key-$value";
}
krsort($arr);
foreach($arr as $key => $value){
    echo "<br/>$key-$value";
}


