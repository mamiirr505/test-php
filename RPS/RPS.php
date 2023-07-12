<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1><?php echo "Rock  Paper  Seasor"; ?></h1>
  <br>
  <form action="answer.php" method="post">
    <input type="radio" name="RPS" value="rock" id="rock">
    <label for="rock">rock</label>
    <input type="radio" name="RPS" value="paper" id="paper">
    <label for="paper">paper</label>
    <input required type="radio" name="RPS" value="scissors" id="scissors">
    <label for="scissors">seasor</label><br><br>
    <input class="submit" type="submit" value="submit">
  </form>
</body>
</html>