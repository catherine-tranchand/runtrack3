
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script scr="script.js">
        </script>
</head>
<body>
<text id="text" style = "display: none" >Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit,
ensuite on prie.  </text>

<button id="show" onclick="show()"> Show the text! </button>

<button id="hide" onclick="hide()"> Hide the text! </button>

<script>
   function show(){
    
    const btnshow = document.querySelector('#show');
    btnshow = document.getElementById("text").style.display ='block';
}

function hide(){
    const btnhide = document.querySelector('#hide');
    btnhide = document.getElementById("text").style.display = 'none';
} 
</script>
    
</body>
</html>