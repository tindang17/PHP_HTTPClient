<?php
function getAndPrintHTML ($option) {
  // send the request
  $handle = fopen($option, "rb");
  // read the response
  $content = stream_get_contents($handle, 8192);
  fclose($handle);
  echo $content;
}
$option = "https://sytantris.github.io/http-examples/step3.html";

getAndPrintHTML($option);
?>