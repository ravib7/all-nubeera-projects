<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<div id="demo"> </div>
   <button type="button" onclick="loadDoc()">Change Content</button>


<script>
function loadDoc() {
   var resp;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(resp) {
    if (this.readyState == 4 && this.status == 200) {
       var data = JSON.parse(xhttp.responseText);
      console.log(data[1][3]);
    }
  };
  xhttp.open("GET", "try2.php", true);
  xhttp.send();
}
</script>
</body>
</html>