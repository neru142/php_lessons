<?php

echo 10 + 3 . PHP_EOL;
echo 10 - 3 . PHP_EOL;
echo 10 * 3 . PHP_EOL;
echo 10 / 3 . PHP_EOL;

echo 10 % 3 . PHP_EOL; // 割った時のあまり
echo 10 ** 3 . PHP_EOL;// べき乗 1000

echo 2 + 10 * 3 . PHP_EOL;
echo (2 + 10) * 3 . PHP_EOL;

// 数値っぽい文字列を計算に使うと、なるべく数値に変換しようとする
echo 2 + '3' . PHP_EOL;