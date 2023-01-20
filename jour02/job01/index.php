<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<button onclick="Citation()">Try it</button>

<article id="myDIV" style="display: none" >
La vie a beaucoup plus d imagination que nous!
</article>



<script>
function Citation() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block"; 
  
}
}
</script>

</body>
</html>
