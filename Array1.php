<?php
//Associative Array
//Key=Value
//Method 1
$a[0]=10;
$a['c']="Pizza";
$a['Vadapav']=35;
$a['Manchuriyan']=150;
//Method 2
//Always use this method
$a=array(
    0=>10,
    "c"=>"Pizza",
    'Vadapav'=>35,
    'Manchuriyan'=>150
);
echo $a[0];
echo "<br/>".$a['c'];
echo "<br/>".$a['Vadapav'];
echo "<br/>".$a['Manchuriyan'];