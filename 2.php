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
    
    <h1>answer page</h1>
    <div>

    <?php
    $answer=$_POST['num'];
    $max= max(1 , 100 , -200,-5,300,-1000,550,40,-60,5);
 if($answer==$max){
    echo"Correct";
    $color="lime";
 }
 else {
    echo"Incorrect";
    $color="red";

 }

 ?>
 </div>
</body>
</html>