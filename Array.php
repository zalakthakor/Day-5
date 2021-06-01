<?php
//numerical Array
//Method 1
$a[0]=10;
$a[1]=20;
$a[2]=20.50;
$a[3]="c";
$a[4]="4";
//Method 2 //Indax dynamic Array
$a[]=10;
$a[]=20;
$a[]=20.50;
$a[]="c";
$a[]="4";
//Method 3
//Always use this method to creat an array
$a = array(10,20,30,"c","c++",10.50,"java");
echo $a[2];
//print Whole array=
for($i=0;$i<count($a);$i++){
    echo "<br/>".$a[$i];
}
//3 inbuilt functons to Debuge Array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

