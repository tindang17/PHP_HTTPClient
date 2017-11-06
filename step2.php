<?php
function getAndPrintHTML () {
  $handle = fopen("https://sytantris.github.io/http-examples/step2.html", "rb");
  $content = [];
  $buffer = '';
  while(!feof($handle)) {
    $buffer = fread($handle, 8192);
  }
  array_push($content, $buffer);
  fclose($handle);
  print_r($content[0]);
}

getAndPrintHTML();
?>