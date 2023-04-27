<?php

// $name = 'taguchi';
// $name = 'dotinstall';

//再代入できない
// define('NAME', 'taguchi');
// define('NAME', 'dotinstall');
// echo NAME . PHP_EOL;

//再代入できない ↑と細かな違いがある
const NAME = 'taguchi';
const NAME = 'dotinstall';
echo NAME . PHP_EOL;