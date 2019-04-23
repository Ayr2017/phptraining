<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="" method="get">
    <input type="button" value="BUTTON" onclick="getSelectedValues()"> <br>
    <label><input type="checkbox" class="c" value="1"> 1</label><br>
    <label><input type="checkbox" class="c" value="2"> 2</label><br>
    <label><input type="checkbox" class="c" value="3"> 3</label><br>
    <label><input type="checkbox" class="c" value="4"> 4</label><br>
    <label><input type="checkbox" class="c" value="5"> 5</label><br>
  </form>
  
</body>

<script>

  function getSelectedAuthors(){
    var authorID =[];
    var checkbox = document.querySelectorAll(".c");
    for(ch of checkbox) {
      if(ch.checked) authorID.push(ch.value);
    }
    authorID = authorID.join(',');
    console.log(authorID);
  }
</script>

</html>

<?php 

?>
