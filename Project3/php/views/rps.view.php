<!-- The viewing page for rock paper scissors -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/styles.css">
    <title>Document</title>
</head>

<body>
    <header><h1>Rock Paper Scissors</h1></header>  
    <div class = "link"><a href="index.view.php">Index</a> <br></div>
    <form action="../background/rps.php" method="post">
    <input type="radio" id="rock" name="rps" value="Rock">
      <label for="rock">Rock</label><br>
    <input type="radio" id="paper" name="rps" value="Paper">
      <label for="paper">Paper</label><br>  
    <input type="radio" id="scissors" name="rps" value="Scissors">
      <label for="scissors">Scissors</label><br><br>
      
    <div>
      <button name = "submit">Submit</button>
    </div>

</form>
</body>

</html>
