<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<button id="button">Let's count the clicks!</button>


<script>
const btn = document.querySelector("#button");
let CountButtonHomeClicks = 0;

btn.addEventListener("click", () => {
  CountButtonHomeClicks += 1;
  console.log(CountButtonHomeClicks);
});

</script>




</body>
</html>
