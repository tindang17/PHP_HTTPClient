<?php
function getHTML ($option, $cb) {
  // initiate the request
  $handle = fopen($option, "rb");
  // interpret the response
  $content = stream_get_contents($handle, 8192);
  fclose($handle);
  call_user_func($cb, $content);
}
$url = "https://sytantris.github.io/http-examples/step4.html";

function printHTML ($html) {
  echo $html;
}
getHTML($url, 'printHTML');
?>