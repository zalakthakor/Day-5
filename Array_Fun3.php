<?php
$a=array("Apple","Banana","PineApple","Grapes","Coconute");
$b=array("Apple","PineApple","Grapes");
$diff=array_diff($a,$b);
print_r($diff);
echo "<br/>";
print_r(array_intersect($a,$b));
$arr=array_values($a);
foreach($arr as $key => $value){
    echo "<br/>$key-$value";
}
array_push($b,"kivi");
echo "<br/>";
print_r($b);
array_pop($b);
echo "<br/>";
print_r($b);
$s="I Love PHP";
$ex=explode(" ",$s);
echo "<br/>";
print_r($ex);
$m=array("my","name","is","Zalak");
$ms=implode(" ", $m);
echo "<br/>".$ms;