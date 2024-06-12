<?php
// String
$name="Anil sidhu";
echo var_dump($name);
// Integer
$num=10;
echo "<br>";
echo var_dump($num);
// Float
$numFloat=10.10;
echo "<br>";
echo var_dump($numFloat);
// Bool
$bool=true;
echo "<br>";
echo var_dump($bool);
// Array
$arr=["anil","sam","ali",2];
echo "<br>";
echo var_dump($arr);
// Null
echo "<br>";
$empty=null;
echo var_dump($empty);
// Object
// $user=new className();
echo "<br>";
$connection=ftp_connect("127.0.0.1") or die("local host not found");
echo var_dump($connection);
?>