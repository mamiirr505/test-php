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
    <p class=math>
    <?php
echo "pi =" ." ".(pi());
echo "<br>";
echo (min(100 ,50,170,200,151,2,8,90,40,300,-100,-6,32));
echo "<br>";
echo (max(100 ,50,170,200,151,2,8,90,40,300,-100,-6,32));
echo "<br>";
echo (abs(-6));
echo "<br>";
echo (sqrt(121));
echo "<br>";
echo (round(0.60))." ".(round(.49));
echo "<br>";
echo (rand(-1000,1000));
?>
    </p>
</body>
</html>

