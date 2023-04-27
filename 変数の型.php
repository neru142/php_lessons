<?php

$a = 'hello';
$b = 10;
$c = -1.3;
$d = null;
$e = true;

//変数について調べるには var_dump()
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);

//型変換 cast
$a = (float)10;
$b = (string)1.3;

var_dump($a);
var_dump($b);