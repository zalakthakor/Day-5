<?php
$a=array("BBCream","Foundation","Kajal","Compack","EyeShadow");
shuffle($a);//shuffle
foreach($a as $key => $value)
{
    echo "<br/>$value";
}
$b=array("a"=>"apple","b"=> "Banana");//trueFalse
echo "<br/>".array_key_exists('a',$b);
echo "<br/>";
$uppercase=array_change_key_case($b,CASE_UPPER);
print_r($uppercase);//uppercase
$e=array("Banana","Apple","Grapes");
$c=array("Yellow","Red","Green");
$d=array_combine($e,$c);//combine
echo "<br/>";
print_r($d);
echo "<br/>".end($b);
$name="Zalak";
$subject="php";
$v=compact("name","subject");//compact
echo "<br/>";
print_r($v);
$fliparray=array_flip($b);//flip
echo "<br/>";
print_r($fliparray);
