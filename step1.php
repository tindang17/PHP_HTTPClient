<?php
function getAndPrintHTMLChunks () {
  // initialize curl session
  $curl = curl_init();
  // set up options
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => "https://sytantris.github.io/http-examples/step1.html"
  ));
  // Send request and save it to $res
  $res = curl_exec($curl);
  echo $res;
  // close session
  curl_close($curl);
};
getAndPrintHTMLChunks();
?>