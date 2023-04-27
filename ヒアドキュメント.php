<?php

$name = 'Shiro';

// ここに書いたテキストの改行や字下げは保持したまま、 $text という変数に代入してくれる
//$text = <<<'EOT' // nowdoc
//$text = <<<"EOT" // heredoc
$text = <<<EOT
hello! $name
  this is loooooong
text!

EOT;

echo $text;