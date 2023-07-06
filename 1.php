<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1 class="title">
        <?php
    echo "Php Math Test";
    ?>
   
    </h1>
    <p>answer the question:whitch number is the biggest one?(1 , 100 , -200,-5,300,-1000,550,40,-60,5)</p>
<form class="form" action="2.php" method="post">
    <input id="num" name="num" required type="number" class="answer"><br>
<button onclick="fun(),answer()">submit</button>
</form>

</body>
</html>

