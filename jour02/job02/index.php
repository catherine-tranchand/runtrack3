<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<button id="button" onclick="showHide()">Try it</button>

<article id="myDIV">
L'importante n'est pas la chute, mais l'atterrisage.
</article>



<script>
function showHide() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

</body>
</html>
