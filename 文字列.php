<?php

$name = 'Shiro';

// echo 'It's Sunday. Hello ' . $name . PHP_EOL;

// 'を文内に含めたいとき
// echo "It's Sunday. Hello " . $name . PHP_EOL;

//"を使った場合変数を直接埋め込み事が出来る
// echo "It's Sunday. Hello $name" . PHP_EOL;

// "を文内に含めたいときは　\を入れてあげる
// echo "It's \"Sunday\". Hello $name" . PHP_EOL;

// \を使えば特殊文字を表現できる 例(\t)
echo "It's \"Sunday\".\t Hello $name" . PHP_EOL;