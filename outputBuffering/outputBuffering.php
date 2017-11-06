<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Streaming Test</title> 
  </head>
  <body>
    <center><a href="#" id="test">Test Ajax Streaming</a></center>
    <script type="text/javascript">
      document.getElementById('test').onclick = function() {
        xhr = new XMLHttpRequest();
        xhr.open("GET", "response.php", true);
        xhr.onprogress = function(e) {
          alert(e.currentTarget.responseText);
        }
        xhr.onreadystatechange = function() {
          if (xhr.readyState == 4) {
            console.log("Complete = " + xhr.responseText);
          }
        }
        xhr.send();
      };
    </script>
  </body>
</html>